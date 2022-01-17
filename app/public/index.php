<?php

declare(strict_types=1);

use ObscureCode\Exceptions\NotFoundException;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Router.php';

//$route = empty($_GET['route']) ? '' : $_GET['route'];

$config = include __DIR__ . '/../config.php';

$router = new Router(
    __DIR__ . '/include',
    $config,
);

try {
    ob_start();
    $router->call($_SERVER['SCRIPT_NAME']);
} catch (NotFoundException $exception) {
    ob_clean();

    $router->call('error', [
        'message' => 'Not found',
    ]);
} finally {
    ob_end_flush();
}
