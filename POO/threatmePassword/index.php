<?php 

    //appel a la classe threatme
    include 'threatme.php';

    //creation de l'objet
    $threatme=new threatmefield();

    //exemple de traitement d'un champ de mot de passe
    //champ a tester
    $pass="2Dddds";
    //minimum caractere acceptable
    $min=5;
    //maximum caractere acceptable
    $max=10;
    //si le champ doit contenir un chiffre
    $chif=true;
    //si le champ doit contenir un caractere special
    $carac=true;
    //si le champ doit contenir une lettre majuscule
    $maj=true;

    //resultat sous la forme de tableau
    $result=$threatme->fieldPassword($min,$max,$chif,$carac,$maj,$pass);

    //affichage du resultat 
    // if(empty($result)){
    //     echo "Mot de passe correct";
    // }else{
        //affichage de la liste des erreurs
        for ($i=1; $i < count($result); $i++) { 
            echo "- ".$result[$i]."<br/>";
    //     }
    // }
   