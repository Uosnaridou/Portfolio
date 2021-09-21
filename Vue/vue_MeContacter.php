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

    <div id="titre_contact">
        <h1>Une idée ? Un projet ?</h1>
        <p>Dites-moi tout !</p>
        <div class="trait_titre"></div>
    </div>
        

    <section id="formulaire_carte">

        <div id="carte">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44214.86818977423!2d-1.2112804080303563!3d46.162110102239716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48015383c9253d75%3A0x405d39260ee9640!2sLa%20Rochelle!5e0!3m2!1sfr!2sfr!4v1627230814307!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
         
        <div id="formulaire">
            <form action="" method="post">
                <div id="nom_prenom">
                    <input type="text" id="nom" class="champ_form" name="nom" placeholder="Nom" required>
                    <input type="text" id="prenom" name="prenom" class="champ_form" placeholder="Prénom" required>
                </div>
                <div>
                    <input type="email" id="email" name="email" class="champ_form" placeholder="Adresse mail" required>
                </div>
                <div>
                    <textarea id="message" name="message" class="champ_form" placeholder="Votre message..." required></textarea>
                </div>

                <div id="placement_button">
                    <button type="submit" name="valider"><i class="fas fa-paper-plane"><p>Envoyer</p></i></button>
                </div>

            </form>
        </div>

        
    </section>

</body>

<?php include 'vue_Footer.php'; ?>
    
  
    
