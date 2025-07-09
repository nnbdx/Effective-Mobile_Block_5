<?php

// Задание 2

$pdo = new PDO("mysql:host=db;dbname=app_db", "user", "password");
//echo "Подключение успешно!";

$stmt = $pdo->query("SELECT * FROM users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

