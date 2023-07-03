<?php

require './utils/pdo.php';

$succes = false;
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $succes = true;

    $sql = "INSERT INTO comptes(nom, mail, message) VALUES(:nom, :mail, :message)";

    $query = $pdo->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->bindValue(':message', $message, PDO::PARAM_STR);
    $query->execute();
}

?>

<form action="" method="POST">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="mail">Email</label>
    <input type="email" name="mail" id="mail">
    <label for="message">Message</label>
    <input type="textarea" name="message" id="message">


    <input type="submit" value="Envoyer">
</form>

