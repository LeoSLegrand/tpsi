# SI-DUO
Code application du projet en duo 

Application requise pour faire tourner le site :

 - [WAMP](https://www.wampserver.com/)

Installation :

- Si vous utiliser le répertoire par défaut de wamp allez dans "C:\wamp64\www" et déposer le dossier "tpsi-master" qui était dans le zip qui vous a été fourni

- Ouvrez vôtre navigateur et allez sur [PhpMyAdmin](http://localhost/phpmyadmin/) le nom d'utilisateur par défaut est "root" et il n'ya a pas de mot de passe

- Une fois connecté cliquer sur **new** dans la bar à gauche de votre écran (voir image ci-dessous)

![image](https://user-images.githubusercontent.com/104253037/231126405-047a2b81-9604-439c-8fc5-65f3a7e55208.png)

- Nommer votre base de donnée "tpsi" et cliquer sur **create**, ensuite cliquer sur l'onglet **import** puis sur **Browse...**

![image](https://user-images.githubusercontent.com/104253037/231128415-92753bba-98a0-4795-ac50-ecfadaa2e1ad.png)

![image](https://user-images.githubusercontent.com/104253037/231129730-d7fd2b2e-f1e6-4518-a85b-9b91159d5d67.png)

- Sélectionner le fichier "tpsi.sql" qui se trouve dans le dossier "sql" du dossier "tpsi-master" que vous avez extrait du zip dans la premère étape, descendez en bas de la page et cliquer **Import**

- Maintenant allez sur le site à cette adress : [Website](http://localhost/tpsi), vous arriver sur une page d'Accueil sur laquel il vous est possible de voir les blogs qui ont été créé (pour l'instant il n'y en a pas)

- Afin de créer un blog il faut vous connecter, pour cela cliquer sur le bouton créer un compte et remplissez les champs (le mot de passe doit faire aux moins 8 charactère et deux comptes ne peuvent pas avoir la même email)

- Une fois vôtre compte créer vous êtes redirigé sur la page d'accueil, cliquer sur "se connecter" et entrer vos identifiants

- Maintenant que vous êtes connecté il vous est possible d'accéder au "Tableau de Bord", depuis celui-ci vous pouvez éditer et supprimer les blogs existants

- Pour créer un nouveau blog cliquer sur "Ajouter blog" depuis le Tableau de Bord, choisissez un titre, entrer un message et poster une image (jpeg, png, jpg ou gif)

- Cliquer sur ajouter, un message apparait pour confirmer ou non si le blog a bien été publié, si cela a fonctionné cliquez sur Tableau de Bord et votre blog apparait

- Il vous est maintenant possible de supprimer ou modifier celui-ci car vous êtes connecté, une personne non connecté ne pourra que consulter la page 

- Cliquer sur "Déconnexion" et les options permettant de poster ou d'éditer les blogs disparaissent et vous êtes redirigez vers la page d'accueil

