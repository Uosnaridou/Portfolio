<?php 
class bdd{ 

        public function appelBDD(){
            $bdd = new PDO('mysql:host=localhost;port=3306;dbname=celiacha_portfolio;charset=utf8','celiacha_admin','UAiqYSWTPSTiaZt');
            return $bdd;
        }

    
        public function nouveauMessage($nom,$prenom,$date,$email,$message){
                $bdd = $this->appelBDD();
                $reponse = $bdd->prepare('INSERT INTO messages(nom, prenom, date, email, message, lu) VALUES(:nom, :prenom, :date, :email, :message, :lu)');
                $resultat = $reponse->execute(array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'date' =>  $date,
                    'email' => $email,
                    'message' => $message,
                    'lu' => 0,
                ));
             return $resultat;
        }
        
        public function connexion($pseudo){
            $bdd = $this->appelBDD();
            $reponse = $bdd->prepare("SELECT id, mdp FROM `connexion` where pseudo = '$pseudo'");
            $reponse->execute();
            return $reponse;
        }


        public function messagesAdmin(){
            $bdd = $this->appelBDD();
            $reponse = $bdd->prepare("SELECT id, nom, prenom, date,  email, message, lu FROM `messages`");
            $reponse->execute();
            return $reponse;
        }

        public function affMessagesAdmin($id){
            $bdd = $this->appelBDD();
            $reponse = $bdd->prepare("SELECT id, nom, prenom, date,  email, message, lu FROM `messages` where id = '$id' ");
            $reponse->execute();
            return $reponse;
        }

        public function modifierMessages($id){
            $bdd = $this->appelBDD();
            $resultat = $bdd->prepare("UPDATE `messages` SET `lu`= 1 WHERE `ID`= $id");
            $resultat->execute();
            return $resultat;
        }

        public function suppMessagesAdmin($id){
            $bdd = $this->appelBDD();
            $reponse = $bdd->prepare("DELETE FROM `messages` where id = '$id' ");
            $reponse->execute();
            return $reponse;
        }
    
}

