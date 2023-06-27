<?php

$users = [
    ['name' => 'Pranas', 'email' => 'petras@gmail.com', 'password' => md5('1234')],
    ['name' => 'Ona', 'email' => 'ona@gmail.com', 'password' => md5('1234')],
    ['name' => 'Vilkas', 'email' => 'vilkas@gmail.com', 'password' => md5('1234')],
    ['name' => 'Saulius', 'email' => 'Saulius@gmail.com', 'password' => md5('1234')]
];

file_put_contents(__DIR__ . '/users.json', json_encode($users));

echo "\n users.json created \n";