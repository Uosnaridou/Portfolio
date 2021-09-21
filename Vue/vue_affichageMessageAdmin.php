<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="icon" type="img/png" href="Img/Icon_maison_jpg.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
</head>
    
    <body id="body">

                <div class="panel">
                    <a href="index.php"><i class="fas fa-home"></i></a>
                    <a href="index.php?page=deconnexion"><i class="fas fa-sign-out-alt"></i></a>
                 </div>

    
                <div class='tableau'>
        <?php 
            while ($resultat = $reponse->fetch()){ ?>
                    <div id="message_affiche">
                        <a href="index.php?page=pageAdmin"><i class="fas fa-arrow-to-left"></i></a>
                        <div class="ligne">
                            <p class="gras">De :</p><p><?php echo htmlspecialchars($resultat['nom']);echo htmlspecialchars($resultat['prenom']);?></p>
                        </div>
                        <div class="ligne">
                            <p class="gras">Le :</p><p><?php $date = htmlspecialchars($resultat['date']);echo date('d-m-Y', strtotime($date));?></p>
                        </div>
                        <div class="ligne">
                            <p class="gras">Mail :</p><p><?php echo htmlspecialchars($resultat['email']);?></p>
                        </div>
                        <p class="gras">Message :</p>
                        <div id="texte">
                            <p><?php echo htmlspecialchars($resultat['message']);?></p>
                        </div>
                    </div>
            <?php }           
                $reponse->closeCursor();
            ?>
          
                </div>

    </body>
    
  