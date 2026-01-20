<?php
$host = 'localhost';
$db = 'workshop_db';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8", // DSN: Data Source Name
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Makes PDO throw exceptions on error
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed");
}
