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

                 <div class="tableau">
                    <table>
                        <tr>
                            <th></th>
                            <th>De:</th>
                            <th>Mail:</th>
                            <th>Le:</th>
                            <th></th>
                        </tr>
                        <?php 
                            while ($resultat = $reponse->fetch()){ ?>
                                <tr>
                                    <td>
                                        <?php $message_lu = htmlspecialchars($resultat['lu']);
                                        if ($message_lu == 0){?>
                                            <a href="index.php?page=affichageMessageAdmin&message=<?php echo $resultat['id']; ?>">
                                                <div id="message_non_lu"></div>
                                            </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="index.php?page=affichageMessageAdmin&message=<?php echo $resultat['id']; ?>">
                                            <?php //echo htmlspecialchars($resultat['nom'])+' '+htmlspecialchars($resultat['prenom']);
                                            echo htmlspecialchars($resultat['nom']); 
                                            echo htmlspecialchars($resultat['prenom']);
                                            ?>
                                        </a>
                                    </td> 
                                    <td>
                                        <a href="index.php?page=affichageMessageAdmin&message=<?php echo $resultat['id']; ?>">
                                            <?php echo htmlspecialchars($resultat['email']);?>
                                        </a>
                                    </td> 
                                    <td>
                                        <a href="index.php?page=affichageMessageAdmin&message=<?php echo $resultat['id']; ?>">
                                            <?php $date = htmlspecialchars($resultat['date']);
                                            echo date('d-m-Y', strtotime($date));?>
                                        </a>
                                    </td> 
                                    <td>
                                    <a href="index.php?page=adminSupp&message=<?php echo $resultat['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');" > 
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>        
                                </tr>
                            <?php }           
                                $reponse->closeCursor();
                            ?>
                    
                    </table>   
    
                </div>
    
    </body>
    
