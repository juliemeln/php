<?php

    $servername = "localhost";
    $username = "juliemeln";
    $password = "";
    $database = "members";
    $port = '3306';

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {    
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    $pdo->exec("CREATE DATABASE $database");
    
    $_SESSION['message'] = "База данных создана";
            //создаем таблицу
    $pdo->exec("CREATE TABLE IF NOT EXISTS users(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(50) NOT NULL, 
        password VARCHAR(50) NOT NULL)
        ");
    header("Location: index.php");
    exit;
}
    
