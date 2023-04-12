<?php

try {
    // DB Informations
    $dbname = "tpsi";
    $dbpass = "";
    $dbuser = "root";
    $dbip = "localhost";
    // DB link
    $bdd = new PDO("mysql:host=".$dbip.";dbname=".$dbname.";charset=utf8",$dbuser,$dbpass);
} catch (Exception $e) {
    echo '<p class="error">Problème de connexion à la base de données !</p>';
}

?>