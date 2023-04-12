<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>Créer un compte</title>
</head>
<body>
    <main>
        <?php
        include('header.php')
        ?>

        <?php
        include('database.php')
        ?>

        <div class="formulaire">
            <div class="container">
                <div class="text">
                    <div class="title">
                        <p>Enregistrez-vous</p>
                    </div>
                    <div class="subtitle">
                        <p>Content de vous voir ! Veuillez saisir vos<br>coordonnées.</p>
                    </div>
                </div>
                <form action="register.php" method="post">
                <div class="username">
                    <label for="">Nom d'utilisateur</label>
                    <div>
                        <input type="text" name="username" id="username" placeholder="Entrez votre nom d'utilisateur" required>
                    </div>
                </div>
                <div class="email">
                    <label for="">Adresse email</label>
                    <div>
                        <input type="email" name="email" id="email" placeholder="Entrez votre adresse mail" required>
                    </div>
                </div>
                <div class="password">
                    <label for="">Mot de passe</label>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                        <p class="subtitle">Doit contenir au moins 8 caractères.</p>
                    </div>
                </div>
                <button type="submit" name="submit" id="submit">Créer un compte</button>
                <p class="account">Vous avez déjà un compte ?<a href="./login.php">Connectez-vous</a></p>
                </form>
            </div>
        </div>
        <?php


        if (isset($_POST['submit'])) {
            $username = $_REQUEST["username"];
            $email = $_REQUEST["email"];
            $password = $_REQUEST["password"];
            $pswd = strlen($password);
            $stmt = $bdd -> prepare('SELECT COUNT(email) FROM users WHERE email = ?');
            $stmt -> execute(array($email));
            
            if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
                if ($pswd < 8) {
                    echo '<p class="error">Le mot de passe est trop court !</p>';
                    return;
                } else if ($stmt = 1) {
                    echo '<p class="error">L\'email que vous avez saisie est déjà pris !</p>';
                    return;
                } else {
                    $secure_password = SHA1($password);
                    $listage = $bdd -> prepare('INSERT INTO `users` (`username`, `email`, `password`) VALUES (?, ?, ?)');
                    $listage -> execute(array($username, $email, $secure_password));
                    header('Location: index.php');
                }
            } else {
                echo 'Champs incorrects';
            }
        }
        
        ?>
    </main>
    <script src="./asset/js/script.js"></script>
</body>
</html>