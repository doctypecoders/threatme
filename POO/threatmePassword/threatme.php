<?php
    /*
        DOCTYPECODERS presente Threatme...
        
        Cette version est une version beta...
        Threatemefield, est un librairie permettant au developpeur de mieux securiser leur application
        en faisant appel a une methode deja implementee pour lui. Avec celle-ci, vous pourrez tester les champs input, telques
        les champs noms, telephone, password, email, cin, nif, no passport, etc.
        Chaque methode retourne un boolean. Si tout ce passe bien, on retourne un true sinon un false 
    */
    class threatmefield{
        //creation des differentes methodes 

        //methode de traitement d'un champ nom, prenom
        public function fieldName($name){

        }

        //methode de traitement d'un champ password
        /*
            Cette fonction prend en compte 6 parametres. 
            - le premier pour demander le minimum de caractere possible
            - le second pour demander le maximum de caractere possible
            - le troisieme pour demander si le champ doit contenir su moins un chiffre
            - le quatrieme pour demandes si le champ doit contenir au moins un caractere special 
            - le cinquieme pour demander si le champ doit contenir une lettre majuscule
            - le sixieme pour demander si le champ doit contenir .....
        */
        public function fieldPassword($min,$max,$chif,$carac,$maj,$pass){
            //initialisation d'un tableau contenant la liste des erreurs
            $error[]="";
            //verification si l'utilisateur a bien taper un chiffre dans le mot de passe
            if($chif===true){
                if (!preg_match("/[0-9]{1,}/", $pass)){
                    $error[]="Vous devez ajouter au moins un chiffre";
                }
            } 
            //verification si le nombre de caractere minimum est respecte
            if(strlen($pass)<$min){
                $error[]="Vous devez ajouter au moins ".$min." caracteres";
            }
            //verification si le nombre de caractere maximum est respecte
            if(strlen($pass)>$max){
                $error[]="Vous devez ajouter au  plus ".$max." caracteres";
            }

            //verification si le champ contient un caractere
            if($maj===true){
                if (!preg_match("/[A-Z]{1,}/", $pass)){
                    $error[]="Vous devez ajouter au moins une lettre majuscule";
                }
            }  

            return $error;
            
        }
    }
?>