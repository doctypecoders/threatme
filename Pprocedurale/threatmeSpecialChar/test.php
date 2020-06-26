<?php
/* 
            threatme field
//////////////////////////
 arg signie argument
///////////////////////////

arg 1 => schéma a chercher oubien la le ou les caractères a chercher

arg 2 => une fois le schéma trouver il va falloir trouver parquoi replacer maintenant

arg 3 => sur quoi va ton chercher le schéma

///////////////////////
exemple d'utilisation
//////////////////////
un hacker vient sur mon site et entre cela en paramètre :

arg 3 => <script>alert(1)</script>

maintenant je vais appliquer mon schéma de telle sorte a chercher les caractères < et les remplacer par #

arg 1 => /</

enfin je spécifie par quoi voudrais-je remplacer

arg 2 => #

*/
$varHack='<script>alert(1)</script>';
$f=preg_replace('/</','#',$varHack);
echo $f;
PHP_EOL;
?>