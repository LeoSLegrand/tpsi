<?php

session_start();

?>
<header id="header">
    <nav id="nav">
        <div class="links">
            <div>
                <a href="index.php">Tableau de bord</a>
            </div>

        </div>
        <div class="buttons">
            <?php
            
            if (!empty($_SESSION['email'])) {
                echo '<div id="login"><a href="../logout.php">Se déconnecter</a></div>';
                echo '<div id="register"><a href="./create.php">Ajouter blog</a></div>';
            } else {
                echo '<div id="login"><a href="login.php">Se connecter</a></div>';
                echo '<div id="register"><a href="register.php">Créer un compte</a></div>';
            }
            
            ?>

        </div>
        <div class="hsep">

        </div>
    </nav>
</header>
<script src="./assets/js/script.js"></script>