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