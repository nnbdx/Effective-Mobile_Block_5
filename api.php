<?php

header('Content-Type: application/json');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/users') {
    $users = [
        ['id' => 1, 'name' => 'Helena'],
        ['id' => 2, 'name' => 'Anna'],
        ['id' => 3, 'name' => 'Alex'],
    ];

    echo json_encode($users);
}
