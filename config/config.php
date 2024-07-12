<?php

return [
    'database' => [
        'name' => 'test',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost;port=3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ],
    ],
];