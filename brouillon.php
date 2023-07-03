<?php

// $error = [];
// $errorMsg = "*Ce champs est obligatoire";
// $success = false;


// if (!empty($_POST['submit'])) {


//     $title = trim(htmlspecialchars($_POST['title']));
//     $content = trim(htmlspecialchars($_POST['content']));
//     $category = trim(htmlspecialchars($_POST['category']));

//     if (!empty($title)) {
//         if (strlen($title) < 4) {
//             $error['title'] = "*4 caractères minimum";
//         } elseif (strlen($title) > 35) {
//             $error['title'] = "*25 caractères maximum";
//         }
//     } else {
//         $error['title'] = $errorMsg;
//     }
//     if (!empty($content)) {
//         if (strlen($content) < 4) {
//             $error['content'] = "*25 caractères minimum";
//         } elseif (strlen($content) > 500) {
//             $error['content'] = "*500 caractères maximum";
//         }
//     } else {
//         $error['content'] = $errorMsg;
//     }

//     if (count($error) == 0) {
//         $success = true;
//         $sql = "INSERT INTO sucre(title, url_img, content, category) VALUES(:title, :url_img, :content, :category)";

//         $query = $pdo->prepare($sql);

//         $query->bindValue(':title', $title, PDO::PARAM_STR);
//         $query->bindValue(':url_img', $image, PDO::PARAM_STMT);
//         $query->bindValue(':content', $content, PDO::PARAM_STMT);
//         $query->bindValue(':category', $category, PDO::PARAM_STR);
//         $query->execute();
//     }
// }

$basepath = "../../";
$stylepath = "../css/";
$scriptpath = "../js/";
$pagepath = "";
include '../partials/_header.php';
include '../utils/pdo.php';

$succes = false;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $succes = true;

    $sql = "INSERT INTO comptes (nom, mail, message) VALUES (:name, :email, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':message', $message);
    $stmt->execute();

}
?>


<?php
    if ($succes === false) { ?>
<form method="POST">
    <input type="text" name="name" id="name" placeholder="Votre nom" value="<?php if (isset($name)) echo $name; ?>">
    <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?php if (isset($firstname)) echo $firstname; ?>">
    <input type="email" name="email" id="email" placeholder="Votre email" value="<?php if (isset($email)) echo $email; ?>">
    <input type="textarea" name="message" id="message" placeholder="Votre message" value="<?php if (isset($message)) echo $message; ?>">
    <input type="submit" name="submit" value="Envoyer">
</form>
<?php
    } else {
        echo "<div class='alert-success'>Merci $firstname $name votre message dit $message. Envoyer avec $email</div>";

    }
?>