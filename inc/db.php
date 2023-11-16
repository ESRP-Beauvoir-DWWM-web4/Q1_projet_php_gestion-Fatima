<?php

$dsn = "mysql:dbname=collard_intranet;host=localhost;charset=utf8";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (Exception $error) {
    echo "<h1>ERREUR : Connexion impossible</h1>";
    echo "<pre>";
    print_r($error);
    echo "</pre>";
    exit();
}