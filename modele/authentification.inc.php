<?php 
//TO FIX
include_once "bd.abonne.inc.php";
include_once "Abonne.php";


//include_once "classesMetier.inc.php";

class Authentification{
	
	public function login($login,$mdpA) {
		if (!isset($_SESSION)){
			session_start();
		}
		
		$unAbonneDAO = new AbonneDAO();		
		$util = $unAbonneDAO->getAbonneById($login);
		if ($util){
			$mdpBD = $util->getmotdepasse();
			$login = $util->getidentifiant();
				// le mot de passe est celui de l'utilisateur dans la base de donnees
				$_SESSION["login"]=$login;
				$_SESSION["mdp"]=$mdpBD;
		}
	}
	
	public function logout() {
		if (!isset($_SESSION)){
			session_start();
		}
		
		session_destroy();		
	}
	
	
	public function getAbonneLoggedOn(){
		$util=null;
		if ($this->isLoggedOn()){
			$unAbonneDAO = new AbonneDAO();
			//grace à la fonction curseur qui enleve le DAO a la fin du nom, on recupère un objet Abonne
			$util = $unAbonneDAO->getAbonneById($_SESSION["login"]);
		}
		return $util;
	}

	
	public function isLoggedOn() {
		if (!isset($_SESSION)){
			session_start();
		}
		$ret = false;
		

	//var_dump($_SESSION["login"]);
		
		if (isset($_SESSION["login"])){	
			$unAbonneDAO = new AbonneDAO();
			$util = $unAbonneDAO->getAbonneById($_SESSION["login"]);
											// $_SESSION["mailU"]
			if ( $util->getidentifiant() == $_SESSION["login"]
			 ) {
			$ret = true;
			
			}
		
			return $ret;
			//return get_class($util->getnumero());
		}	//print_r($util->getmotdepasse());

	}

}

/*if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
	// prog principal de test
	header('Content-Type:text/plain');

	$auth = new Authentification();
	
	// connexion
	$auth->login("mathieu.capliez@gmail.com","Passe1?");
	
	// test de connexion
	if ($auth->isLoggedOn()){
		echo "logged";
	}
	else{
		echo "not logged";
	}
	
	// deconnexion
	$auth->logout();
	
}*/


?>