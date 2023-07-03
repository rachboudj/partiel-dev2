<?php

require './utils/pdo.php';

if (!empty($_POST['submit'])) {
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comptes(nom, mail, message) VALUES(:nom, :mail, :message)";

    die($sql);

    $query = $pdo->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->bindValue(':message', $message, PDO::PARAM_STR);
    $query->execute();
}

?>

<form action="" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="mail">Email</label>
    <input type="email" name="mail" id="mail">
    <label for="message">Message</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>

    <input type="submit" value="Envoyer">
</form>

