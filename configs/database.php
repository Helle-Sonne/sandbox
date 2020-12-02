<?php

return [
    'host' => 'localhost',
    'dbname' => 'sandbox',
    'charset' => 'utf8',
    'user' => 'root',
    'password' => '',
    'options' => [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false
    ]
];