<?php
###############################
# Auteur : @kal et  @MrX
    /*
        DOCTYPECODERS presente Threatme...
        
        Cette version est une version beta...
        Threatemefield, est un librairie permettant au developpeur de mieux securiser leur application
        en faisant appel a une methode deja implementee pour lui. Avec celle-ci, vous pourrez tester les champs input, telques les champs noms, telephone, password, email, cin, nif, no passport, etc.Chaque methode retourne un boolean. Si tout ce passe bien, on retourne un true sinon un false 
    */
###############################
        //extrait tous les variables POST
extract($_POST);
if(isset($envoyer)){
	if(isset($username) && !empty($username)){
		function utilisateur($username){
			/*
			        +---------Aide----------+
			// ==> delimiteurs
			permettant de bien placer ou ciblé la verification sur la chaine de caracteres et peuvent
			etre diverses types ssi ceci est caracteres speciaux.

			^ ==> debut de chaine
			recherche tous ce qui est compris au debut dune chaine de caractere.
			exemple : ^[A-Z] = recherche tous les lettres de l'intervalle A-Z qui sont majuscules

			$ == > fin de chaine
			recherche tous ce qui est compris en fin dune chaine de caractere.
			exemple: [a-zA-Zàâçèéêîôùû]+$ = recherche tous les lettres de l'intervalle A-Z et aussi des caracteres accentues qui sont majuscules et minuscules en fin de chaine.

			| ==> operateur logique OU
			recherche une caractere ou une autre.
			exemple : (_|-|) == recherche une underscore ou un tirait ou une espace

			### REGEX (expression reglieres) ###
			regex : permet d'effectuer des operations telles que remplacer, modifier et autres dans une str. Ils constituent une langage appart
			qui provient du perl ...
			 	En php il y'a une fonction qui permet de les appliquer,
					preg_match ==> fonction qui permet de traiter les regex de type PCRE
					cf : https://www.php.net/manual/fr/function.preg-match.php

			*/
			if(preg_match("/^[A-Z]+([A-Zàâçèéêîôùû](_|-| )[a-zA-Zàâçèéêîôùû])*[a-zA-Zàâçèéêîôùû]+$/", $username) && strlen($username) > 4){
					echo "Merci,votre nom : ".$username." est correct  !!!!";
			}else{
				$error='
						<p>
							le nom utilisateur doit etre :
							<ol>
							<p>################################</p>
								<li>
									la 1ere lettre en majuscule et compris en A-Z
								</li>
								<li>
									doit contenir au moins 4 caracteres
								</li>
							<p>#############################</p>
							</ol>
						</p>
				';
				echo $error;
			}
		}
	}else{
		echo "remplissez les espaces vides";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>username</title>
</head>
<body>
	<h1>Threatment Fields Name</h1>
	<form method="post">
		<input type="text" name="username" placeholder="nom"></br>
		<input type="submit" name="envoyer" value="envoyer">
	</form>
<!-- appel a la fonction utilisateur en php  -->
<?php 
if(isset($username) && !empty($username)){
	// fonction
	utilisateur($username); 
}else{}
?>

</body>
</html>