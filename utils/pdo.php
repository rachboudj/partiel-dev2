<?php
$serveur = "localhost";
$dbname = "formulaire";
$login = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$serveur;dbname=$dbname", $login, $password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));

    echo "Connexion établie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
