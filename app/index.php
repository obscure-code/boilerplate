<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Router.php';

if (empty($_GET['route'])) {
    $route = '';
} else {
    $route = $_GET['route'];
}

$config = include(__DIR__ . '/config.php');

$router = new Router(
    __DIR__ . '/include',
    $config,
);

$router->call($route);
