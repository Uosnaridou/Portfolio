<?php        session_start();//On démarre la session
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (empty($_GET['page'])){
    require 'Vue/vue_Accueil.php';
} else {
    switch($_GET['page']){
            
        case 'projets':
            require 'Vue/vue_MesProjets.php';
                break;

        case 'moi':
            require 'Vue/vue_InfoMoi.php';
            break;
            
        case 'contact':
            require 'Controller/controller.php';
            $requete = new controller();
            $reponse = $requete->nouveauMessage();
            break;
            
        case 'connexionAdmin':
            require 'Controller/controller.php';
            $requete = new controller();
            $reponse = $requete->connexion();
            break;

        case 'deconnexion':
            require 'Controller/controller.php';
            $requete = new controller();
            $reponse = $requete->deconnection();
            break;
            
        case 'pageAdmin' :
            require 'Controller/controller.php';
            $requete = new controller();
            if (isset($_SESSION["id"])) {
                $reponse = $requete->messagesAdmin();
            } else {
                $reponse = $requete->connexion();
            }
            break;

        case 'affichageMessageAdmin' :
            require 'Controller/controller.php';
            $requete = new controller();
            if (isset($_SESSION["id"])) {
                $reponse = $requete->affichageMessageAdmin();
            } else {
                $reponse = $requete->connexion();
            }
            break; 

        case 'adminSupp' :
            require 'Controller/controller.php';
            $requete = new controller();
            if (isset($_SESSION["id"])) {
                $reponse = $requete->suppMessage();
            } else {
                $reponse = $requete->connexion();
            }
            break;
            
        case 'mentionLegales':
            require 'Vue/vue_mentionLegales.php';
            break; 
            
        default:
            require 'Vue/vue_Accueil.php';
             break;
    }
}
