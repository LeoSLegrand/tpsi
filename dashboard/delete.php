<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <title>Se connecter</title>
</head>
<body>
    <main>
        <?php
        require('../database.php')
        ?>
        <?php

        $id = $_GET["id"];

        $stmt = $bdd->prepare('DELETE FROM blogs WHERE id = ?');
        $stmt->execute([$id]);
        $user = $stmt->fetch();

        ?>
        
    </main>
</body>
</html>
