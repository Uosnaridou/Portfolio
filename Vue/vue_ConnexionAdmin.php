<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="icon" type="img/png" href="Img/icone.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
</head>    

    <body>
        
        <a class="fleche_retour" href="index.php?page=accueil">
            <i id="retour_accueil" class="fas fa-arrow-left"></i>
        </a>

        <div id="titre_admin">
            <h1>Connexion au panel administrateur</h1>
            <div class="trait_titre"></div> 
        </div>
        
        <form id="form_connexion" action="" method="post">
            <input type="text" id="pseudo" name="pseudo" placeholder="Login" required>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>

            <input id="submit_connexion" type="submit" name="valider" value="Se connecter"/>
        </form>
        
    </body>
    

</html>