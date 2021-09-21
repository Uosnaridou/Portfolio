<?php
class controller{
    
    
        public function nouveauMessage(){
            require 'Modele/modele.php';
            $contact = new bdd;


            if(!empty($_POST)){
                if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])){//Vérifie que TOUT les champs ont été remplis
                    $nom = htmlspecialchars($_POST['nom']); 
                    $prenom = htmlspecialchars($_POST['prenom']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']); 
                    $date = date("Y-m-d");
                    $reponse = $contact->nouveauMessage($nom,$prenom,$date,$email,$message);

                     if ($reponse){
                         echo '<div id="message_popUp"> Message envoyez avec succès.</div>';
                           //envoie d'un mail à l'admin
                            $destinataire = 'celia.chanabe@gmail.com';
                            $sujet = 'Reception courrier';
                            $body = 'Vous avez reçus un mail de contact sur votre Portfolio.';
                            $headers = "From: Portfolio";
                            mail($destinataire,$sujet,$body,$headers);
                     }else{
                         echo 'NE FONCTIONNE PAS';
                     }

                }else{
                    echo 'Veuillez remplir tout les champs du formulaire.';
                }

            }
                require 'Vue/vue_MeContacter.php';
        }
        


    
        public function connexion(){
            require 'Modele/modele.php';
            $connexion = new bdd;    
            
                if(!empty($_POST)){
                    $pseudo = htmlspecialchars($_POST['pseudo']);//recup le pseudo poster
                    $mdp = htmlspecialchars($_POST['mdp']);//recup le mdp poster    

                    $reponse = $connexion->connexion($pseudo);
                    $resultat = $reponse->fetch();
                    $mdp_bdd = $resultat['mdp'];//recup le mdp de la base de données
                    $mdp_correct = password_verify(htmlspecialchars($mdp),$mdp_bdd);//verfie les deux mdp (mdp bdd crypter)

                    if (!$resultat){//si les deux ne sont pas les meme
                        echo ("Vous n'avez pas le droit a cette accès, il est reservé pour l'administrateur.");
                    }else{//si les deux mdp sont identique
                        if($mdp_correct){
                            $_SESSION['id'] = $resultat['id'];
                            $session = $_SESSION['id'];
                            if ($session != 0){
                                header('location: index.php?page=pageAdmin');
                            }else{
                                header ('location : index.php?page=connexionAdmin');
                            }
                        }else{
                            echo 'Mauvais mot de passe';
                        }
                    }
 
                }
            require 'Vue/vue_ConnexionAdmin.php';    
        }    
    
    
        public function deconnection(){
            session_destroy();//on detruit notre session
            header ('location: index.php');
        }
    
    
        public function messagesAdmin(){
            require 'Modele/modele.php';
            $messagesAdmin = new bdd;
            $reponse = $messagesAdmin->messagesAdmin();
            require 'Vue/vue_pageAdmin.php';
        }

        public function affichageMessageAdmin(){
            require 'Modele/modele.php';
            $affMessagesAdmin = new bdd;
            $id_message = $_GET['message'];
            $reponse = $affMessagesAdmin->affMessagesAdmin($id_message);
            $resultat = $affMessagesAdmin->modifierMessages($id_message);
            require 'Vue/vue_affichageMessageAdmin.php';
        } 
        
        public function suppMessage(){
            require 'Modele/modele.php';
            $suppMessage = new bdd;
            $id_message = $_GET['message'];
            $reponse = $suppMessage->suppMessagesAdmin($id_message);
            header('location: index.php?page=pageAdmin');
        }
}
