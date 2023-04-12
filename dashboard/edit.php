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
        // Request du header
        require('header.php')
        ?>
        
        <?php
        // Connexion à la base de données
        require('../database.php')
        ?>
        <?php

        // Vérifie si la personne est connectée
        if (!empty($_SESSION['email'])) {
            // Permet de continuer le programme si la personne est connectée
            echo '';
        } else {
            // Redirige si la personne n'est pas connectée
            header('location: ../index.php');
        }
        ?>

        <div class="formulaire">
            <div class="container">
                <div class="text">
                    <div class="title">
                        <p>Modifier un blog</p>
                    </div>
                    <div class="subtitle">
                        <p>Tous les champs sont obligatoires. Alors, n'en manquez pas !</p>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="title">
                        <label for="">Titre</label>
                        <div>
                            <input type="text" name="title" id="title" placeholder="Entrez votre titre" required>
                        </div>
                    </div>
                    <div class="textarea">
                        <label for="">Message</label>
                        <textarea name="textarea" id="textarea" placeholder="Entrez votre message"></textarea>
                    </div>
                    <div class="file">
                        <label for="">Image</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <button type="submit" name="submit" id="submit">Ajouter</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
