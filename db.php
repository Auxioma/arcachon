<?php

// connection a la base de donnees local en utilisant PDO
$host = 'localhost';
$dbname = 'register';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo $e->getMessage();
}