<?php

return [
    'database' => [
        'name'       => 'myframework',
        'username'   => 'root',
        'password'   => '',
        'connection' => 'mysql:host=localhost:3307',
        'options'    => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
