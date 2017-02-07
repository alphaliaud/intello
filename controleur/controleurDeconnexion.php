
<?php 
	include_once"../modele/authentification.inc.php";
	$uneConnex = new authentification();
	 $uneConnex->logout();
	header('Location:/Autocool PPE/index.php?autoM=accueil');

