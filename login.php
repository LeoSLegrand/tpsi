<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>Se connecter</title>
</head>
<body>
    <main>
        <?php
        require('header.php')
        ?>
        <?php
        include('database.php')
        ?>
        <?php
        // Verification of login data
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Prevention of SQL injections
            $stmt = $bdd->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
            $stmt->execute([$email, sha1($password)]);
            $user = $stmt->fetch();
            $lastConnection = date('Y-m-d');
            if ($user) {
                // Redirection to the home page if the data is correct
                $_SESSION['email'] = $email;
                header('Location: index.php');
                $listage = $bdd -> prepare('UPDATE `users` SET `lastConnection` = ? WHERE email = ?');
                $listage -> execute(array($lastConnection, $email));
            } else {
                echo '<p class="error">Nom d\'utilisateur ou mot de passe incorrect !</p>';
            }
        }
        ?>
        <div class="formulaire">
            <div class="container">
                <div class="text">
                    <div class="title">
                        <p>Connectez-vous</p>
                    </div>
                    <div class="subtitle">
                        <p>Entrez votre nom d'utilisateur et votre mot de passe pour vous connecter.</p>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="email">
                        <label for="">Adresse mail</label>
                        <div>
                            <input type="text" name="email" id="email" placeholder="Entrez votre adresse mail" required>
                        </div>
                    </div>
                    <div class="password">
                        <label for="">Mot de passe</label>
                        <div>
                            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" id="submit">Se connecter</button>
                    <p class="account">Vous n'avez pas de compte ? <a href="./register.php">Créez le votre !</a></p>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
