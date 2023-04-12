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

        require('header.php')

        ?>
        <?php

        require('../database.php')

        ?>

        <?php

        if (!empty($_SESSION['email'])) {
            
        } else {
            header('location: ../index.php');
        }

        ?>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Vérifier si un fichier a bien été envoyé
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                // Vérifier que le fichier est une image
                $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
                $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    if (in_array($file_extension, $allowed_types)) {
                    // Déplacer le fichier dans le dossier d'upload
                    $upload_dir = '../img/';
                    $filename = uniqid() . '.' . $file_extension;
                    $upload_path = $upload_dir . $filename;
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
                            if (isset($_POST['title']) && isset($_POST['textarea'])) {
                                $titlePost = $_POST['title'];
                                $contentPost = $_POST['textarea'];
                                $listageImage = $bdd -> prepare('INSERT INTO `blogs` (`imgName`, `titlePost`, `contentPost`) VALUES (?, ?, ?)');
                                $listageImage -> execute(array($filename, $titlePost, $contentPost));
                            }
                            // Le fichier a été uploadé avec succès
                            echo '<p class="sucess">Le blog a été posté avec succès !</p>';
                        } else {
                            // Une erreur est survenue lors de l'upload
                            echo '<p class="error">Une erreur est survenue lors de l\'envoie du fichier</p>';
                        }
                    } else {
                        // Le fichier n'est pas une image
                        echo '<p class="error">L\'extension du fichier n\'est pas supportée !</p>';
                    }
            } else {
                // Aucun fichier n'a été envoyé
                echo '<p class="error">Veuillez sélectionner un fichier à envoyer.</p>.';
            }
        }
        ?>

        <form class="formulaire" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="text">
                    <div class="title">
                        <p>Nouveau blog</p>
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
                        <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/svg">
                    </div>
                    <button type="submit" name="submit" id="submit">Ajouter</button>
                </form>
            </div>
        </form>
    </main>
</body>
</html>
