<?php

declare(strict_types=1);

abstract class Model
{
    protected PDO $db;

    public function __construct()
    {
        if (!getenv('MYSQL_HOSTNAME')) {
            throw new RuntimeException('Missed MYSQL_HOST');
        }

        if (!getenv('MYSQL_USERNAME')) {
            throw new RuntimeException('Missed MYSQL_USERNAME');
        }

        if (!getenv('MYSQL_PASSWORD')) {
            throw new RuntimeException('Missed MYSQL_PASSWORD');
        }

        if (!getenv('MYSQL_DATABASE')) {
            throw new RuntimeException('Missed MYSQL_DATABASE');
        }

        if (!getenv('MYSQL_PORT')) {
            throw new RuntimeException('Missed MYSQL_PORT');
        }

        $charset = 'utf8';
        $hostname = getenv('MYSQL_HOSTNAME');
        $username = getenv('MYSQL_USERNAME');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');
        $port = getenv('MYSQL_PORT');


        $this->db = new PDO("mysql:host=" . $hostname . ";port=" . $port . ";dbname=" . $database . ";charset=" . $charset, $username, $password);
    }
}