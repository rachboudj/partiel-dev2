<?php

require './utils/pdo.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comptes(nom, email, message) VALUES(:nom, :email, :message)";

    $query = $pdo->prepare($sql);
    $query->bindValue(':nom', $nom);
    $query->bindValue(':email', $email);
    $query->bindValue(':message', $message);
    $query->execute();
}

?>

<form action="" method="POST">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="message">Message</label>
    <input type="textarea" name="message" id="message">


    <input type="submit" value="Envoyer">
</form>

