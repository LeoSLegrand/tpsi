<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>Se connecter</title>
</head>
<body>
    <main>
        <?php
        // DB Informations
        $dbname = "tpsi";
        $dbpass = "";
        $dbuser = "root";
        $dbip = "localhost";
        // DB link
        $bdd = new PDO("mysql:host=".$dbip.";dbname=".$dbname.";charset=utf8",$dbuser,$dbpass);
        // Verification of login data
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // Prevention of SQL injections
            $stmt = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
            $stmt->execute([$username, sha1($password)]);
            $user = $stmt->fetch();
            if ($user) {
                // Redirection to the home page if the data is correct
                header('Location: index.php');
                session_start();
                $_SESSION["connect"] = true;
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
                    <div class="username">
                        <label for="">Nom d'utilisateur</label>
                        <div>
                            <input type="text" name="username" id="username" placeholder="Entrez votre nom d'utilisateur">
                        </div>
                    </div>
                    <div class="password">
                        <label for="">Mot de passe</label>
                        <div>
                            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
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
