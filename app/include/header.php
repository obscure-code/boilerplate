<!DOCTYPE html><html lang="ru"><head>    <title><?php if (!empty($data['title'])) echo $data['title']; ?></title>    <meta http-equiv="content-type" content="text/html; charset=utf8"/>    <meta name="description" content="<?php if (!empty($data['description'])) echo $data['description']; ?>"/>    <link href="/img/favicon.gif" rel="icon"/>    <link href="/css/style.css" type="text/css" rel="stylesheet"/></head><body><div style="margin: 40px;">    <div style="border:1px solid #888888;background-color:#c1c1c1;padding:20px;font:bold 15px Arial;color:#393939;">WARNING</div>    <div style="border:1px solid #e6e6e6;background-color:#e6e6e6;padding:20px;font:normal 15px Tahoma;color:#393939;">        <?php        echo 'Hello, this is ' . __FILE__ . '! Edit me!';        ?>    </div></div>