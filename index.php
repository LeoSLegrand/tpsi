<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Tableau de bord</title>
</head>
<body>
    <?php
    
    require('header.php');
    require('./database.php');

    //Requête DBB
    $listage = $bdd -> query('SELECT * FROM blogs ORDER BY id');
    
    ?>

    <main>
        <div class="container">
            <?php    
                //Requête DBB
                $listage = $bdd->query('SELECT * FROM blogs ORDER BY id DESC');
                while ($list = $listage->fetch()) {
                    echo '<div class="post-container">

                            <div class="post">
                            <div class="text">
                                <div class="title">
                                    <p>'.$list["titlePost"].'</p>
                                </div>
                                <div class="subtitle">
                                    <p>'.$list["contentPost"].'</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="picture">
                                    <img src="img/'.$list["imgName"].'">
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </main>
</body>
</html>
