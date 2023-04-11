<?php

// DB Informations
$dbname = "tpsi";
$dbpass = "";
$dbuser = "root";
$dbip = "localhost";
// DB link
$bdd = new PDO("mysql:host=".$dbip.";dbname=".$dbname.";charset=utf8",$dbuser,$dbpass);

?>