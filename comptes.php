<h1>Affichage des messages</h1>

<?php
require './utils/pdo.php';

$sql = "SELECT * FROM comptes";
$query = $pdo->prepare($sql);
$query->execute();
$comptes = $query->fetchAll();

foreach ($comptes as $compte) { ?>

<span><?= $compte['nom'] ?></span>
<span><?= $compte['email'] ?></span>
<span><?= $compte['message'] ?></span>

<?php
}
?>