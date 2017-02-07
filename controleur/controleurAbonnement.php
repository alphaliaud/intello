<?php
include_once 'modele/Abonne.php';
include_once 'modele/bd.abonne.inc.php';


//Fonction pour générer un code auto
function random($car) {
	$string = "";
	$chaine = "abx0ycd1zef2gh3ij4kl5mn6op7qr8st9uvw";
	for($i=0; $i<$car; $i++) {
	$string .= $chaine[rand()%strlen($chaine)];
	}
	return $string;
}

//Si inscription dans l'url n'est pas vide, on sotck sa valeur dans inscription
if(isset($_GET["inscription"])){
$inscription= $_GET["inscription"];
//print_r($inscription);
}

//Si inscription n'est pas vide et qu'inscription est égal à 1
if(isset($inscription)) {
	$message="";
	if ($_POST['prenom']==""){$message .= "<br>- Le prénom doit être indiqué";}
	if ($_POST['nom']==""){$message .= "<br>- Le nom doit être indiqué";}
	if ($_POST['mail']==""){$message .= "<br>- E-mail doit être spécifié";}
	if ($_POST['identifiant']==""){$message .= "<br>- L’Identifiant doit être spécifié";}
	if ($_POST['mdp']==""){$message .= "<br>- Le mot de passe préféré doit être spécifié";}

	//Si le message comportant les champs obligatoire n'estp as vide, on affiche un message d'erreur
	if($message==""){
		$unabonneDAO = new AbonneDAO();
		$abonne = new Abonne();
		$abonne->setnumero(random(8));
		//$abonne->setCodePaiment("");
		//$abonne->setCodeFormule("");
		$abonne->setnom($_POST['nom']);
		$abonne->setprenom($_POST['prenom']);
		$abonne->setdatenaissance($_POST['datenaiss']);
		$abonne->setrue($_POST['rue']);
		$abonne->setville($_POST['ville']);
		$abonne->setcodepostal($_POST['cp']);
		$abonne->setsexe($_POST['sexe']);
		$abonne->setcivilite($_POST['civilite']);
		$abonne->setsecondprenom($_POST['secondprenom']);
		$abonne->settelephone($_POST['tel']);
		$abonne->setmail($_POST['mail']);
		$abonne->setidentifiant($_POST['identifiant']);
		$abonne->setmotdepasse($_POST['mdp']);
		$abonne->setnumpermis($_POST['numpermis']);
		$abonne->setlieuobtention($_POST['lieuobtention']);
		$abonne->setdateobtention($_POST['dateobtention']);
		$abonne->setcompte($_POST['comptecle']);
		$abonne->settitulairecompte($_POST['titulaire']);
		$abonne->setRIB($_POST['rib']);
		$abonne->setIBAN($_POST['iban']);
		$abonne->settypeUtilisateur("lambda");
		/*$abonne->setautrecont($_POST['autrecont']);
		$abonne->setcomplement($_POST['complement']);
		$abonne->settelmobile($_POST['telmobile']);
		if ($_POST['mail2']== 'mail'){
			$abonne->setfacturation($_POST['mail2']);
		}
		else{
			$abonne->setfacturation($_POST['courrier']);
		}

		$abonne->setpaiement($_POST['modepaiement']);
		$abonne->setnombanque($_POST['nombanque']);
		$abonne->setguichet($_POST['banqueguichet']);*/


		$unabonneDAO->addAbonne($abonne);
		
	}

}
include_once 'vue/inscription.php';





