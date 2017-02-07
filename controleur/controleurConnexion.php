
<?php
include_once"../modele/authentification.inc.php";
$affiche=false;

if( isset ($_POST['login']) ){
$auth = new Authentification();
$auth->login($_POST['login'],$_POST['password']);
			
			
if( $auth->isLoggedOn()){
	$util = $auth->getAbonneLoggedOn();
	$psd= $util->getidentifiant();
	header('Location:/Autocool PPE/index.php?autoM=accueil');
}
$affiche= true;

	
}
else{
	header('Location:/Autocool PPE/index.php?autoM=accueil');
}

?>