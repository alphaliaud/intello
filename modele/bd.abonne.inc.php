<?php
include_once 'dao.inc.php';


class AbonneDAO extends DAO{
	private $_NumAbonne = 'NUMABONNE as _NumAbonne';
	private $_CodePaiement = 'CODEPAIMENT as _CodePaiement';
	private $_CodeFormule = 'CODEFORMULE as _CodeFormule';
	private $_sexe = 'SEXE as _sexe';
	private $_civilite = 'CIVILITE as _civilite';
	private $_nom = 'NOM as _nom';
	private $_prenom = 'PRENOM as _prenom';
	private $_secondprenom= 'SECONDPRENOM as _secondprenom';
	private $_dateNaiss = 'DATENAISSANCE as _dateNaiss';
	private $_rue = 'RUE as _rue';
	private $_ville = 'VILLE as _ville';
	private $_codepostal = 'CODEPOSTAL as _codepostal';
	private $_telephone = 'TELEPHONE as _telephone';
	private $_mail = 'MAIL as _mail';
	private $_identifiant = 'IDENTIFIANT as _identifiant';
	private $_motDePasse = 'MOTDEPASSE as _motDePasse';
	private $_numeroPermis = 'NUMPERMIS as _numeroPermis';
	private $_lieuObtentionPermis = 'LIEUOBTENTION as _lieuObtentionPermis';
	private $_dateObtentionPermis = 'DATEOBTENTION as _dateObtentionPermis';
	private $_modePaiement = 'MODEPAIEMENT as _modePaiement';
	private $_modeFacturation = 'MODEFACTURATION as _modeFacturation';
	private $_titulaireCompte = 'TITULAIRECOMPTE as _titulaireCompte';
	private $_compteCle = 'COMPTE as _compteCle';
	private $_nomBanque = 'NOMBANQUE as _nomBanque';
	private $_banqueGuichet = 'BANQUEGUICHET as _banqueGuichet';
	private $_iban = 'IBAN as _iban';
	private $_bic = 'BIC as _bic';
	private $_typeUtilisateur = 'TYPEUTILISATEUR as _typeUtilisateur';
	private $_piecejointe = 'PIECEJOINTE as _piecejointe';
	private $_typeabonnement = 'TYPEABONNEMENT as _typeabonnement';


	public function getAbonnes(){
		try {
			$req = $this->prepare("select $this->_NumAbonne,
			$this->_sexe, $this->_civilite, $this->_nom, $this->_prenom, $this->_secondprenom,
			$this->_dateNaiss, $this->_rue, $this->_ville, $this->_codepostal, $this->_telephone,
			$this->_mail, $this->_identifiant, $this->_motDePasse,
			$this->_numeroPermis, $this->_lieuObtentionPermis, $this->_dateObtentionPermis,
			$this->_titulaireCompte, $this->_compteCle, $this->_iban, $this->_bic, $this->_typeUtilisateur
			FROM UTILISATEUR");
			$req->execute(); 
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
			die();
		}
		return $this->cursorToObjectArray($req);
	}


	public function getAbonneByMail($unMail){
		try {
			$req = $this->prepare("select * from UTILISATEUR where mail=:mail");
			$req->bindValue(':mail', $unMail, PDO::PARAM_STR);
			$req->execute();
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
			die();
		}
		return $this->cursorToObject($req);
	}

	public function getAbonneById($unID){
		try {
			$req = $this->prepare("select 
			$this->_NumAbonne , $this->_CodePaiement, $this->_CodeFormule,
			$this->_sexe, $this->_civilite, $this->_nom, $this->_prenom, $this->_secondprenom,
			$this->_dateNaiss, $this->_rue, $this->_ville, $this->_codepostal, $this->_telephone,
			$this->_mail, $this->_identifiant, $this->_motDePasse,
			$this->_numeroPermis, $this->_lieuObtentionPermis, $this->_dateObtentionPermis,
			$this->_titulaireCompte, $this->_compteCle, $this->_iban, $this->_bic, $this->_typeUtilisateur
			from utilisateur where identifiant=:id");
			/*, $this->_CodePaiement, $this->_CodeFormule,
			$this->_sexe, $this->_civilite, $this->_nom, $this->_prenom, $this->_secondprenom,
			$this->_dateNaiss, $this->_rue, $this->_codepostal, $this->_telephone,
			$this->_mail, $this->_identifiant, $this->_motDePasse,
			$this->_numeroPermis, $this->_lieuObtentionPermis, $this->_dateObtentionPermis,
			$this->_titulaireCompte, $this->_compteCle, $this->_iban, , $this->_typeUtilisateur  
			*/
			$req->bindValue(':id', $unID, PDO::PARAM_STR);
			$req->execute();
			//$resultat=$req->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
			die();
		}
		return $this->cursorToObject($req);
		//return $resultat;
	}

	public function addAbonne($unAbonne){
		try {
			//$mdpACrypt = crypt($unAbonne->getMotDePasse());
			$req = $this->prepare("insert into utilisateur (NUMABONNE, NOM, PRENOM, DATENAISSANCE, RUE, VILLE, CODEPOSTAL, CIVILITE, SEXE, SECONDPRENOM, TELEPHONE, MAIL, IDENTIFIANT, MOTDEPASSE, NUMPERMIS, LIEUOBTENTION, DATEOBTENTION, TITULAIRECOMPTE, COMPTE, BIC, IBAN, TYPEUTILISATEUR) 
				values(:NUMABONNE, :NOM, :PRENOM, :DATENAISSANCE, :RUE, :VILLE, :CODEPOSTAL, :CIVILITE, :SEXE, :SECONDPRENOM, :TELEPHONE, :MAIL, :IDENTIFIANT, :MOTDEPASSE, :NUMPERMIS, :LIEUOBTENTION, :DATEOBTENTION, :TITULAIRECOMPTE, :COMPTE, :BIC, :IBAN, :TYPEUTILISATEUR)");
			
			
			$req->bindValue(':NUMABONNE', $unAbonne->getnumero(), PDO::PARAM_STR);
			/*$req->bindValue(':CODEPAIMENT', $unAbonne->getCodePaiment(), PDO::PARAM_STR);
			$req->bindValue(':CODEFORMULE', $unAbonne->getCodeFormule(), PDO::PARAM_STR);*/
			$req->bindValue(':NOM', $unAbonne->getnom(), PDO::PARAM_STR);
			$req->bindValue(':PRENOM', $unAbonne->getprenom(), PDO::PARAM_STR);
			$req->bindValue(':DATENAISSANCE', $unAbonne->getdatenaissance(), PDO::PARAM_STR);
			$req->bindValue(':RUE', $unAbonne->getrue(), PDO::PARAM_STR);
			$req->bindValue(':VILLE', $unAbonne->getville(), PDO::PARAM_STR);
			$req->bindValue(':CODEPOSTAL', $unAbonne->getcodepostal(), PDO::PARAM_STR);
			$req->bindValue(':CIVILITE', $unAbonne->getcivilite(), PDO::PARAM_STR);
			$req->bindValue(':SEXE', $unAbonne->getsexe(), PDO::PARAM_STR);
			$req->bindValue(':SECONDPRENOM', $unAbonne->getsecondprenom(), PDO::PARAM_STR);
			$req->bindValue(':TELEPHONE', $unAbonne->gettelephone(), PDO::PARAM_STR);
			$req->bindValue(':MAIL', $unAbonne->getmail(), PDO::PARAM_STR);
			$req->bindValue(':IDENTIFIANT', $unAbonne->getidentifiant(), PDO::PARAM_STR);
			$req->bindValue(':MOTDEPASSE', $unAbonne->getmotdepasse(), PDO::PARAM_STR);
			$req->bindValue(':NUMPERMIS', $unAbonne->getnumpermis(), PDO::PARAM_STR);
			$req->bindValue(':LIEUOBTENTION', $unAbonne->getlieuobtention(), PDO::PARAM_STR);
			$req->bindValue(':DATEOBTENTION', $unAbonne->getdateobtention(), PDO::PARAM_STR);
			$req->bindValue(':TITULAIRECOMPTE', $unAbonne->gettitulairecompte(), PDO::PARAM_STR);
			$req->bindValue(':COMPTE', $unAbonne->getcompte(), PDO::PARAM_STR);
			$req->bindValue(':BIC', $unAbonne->getRIB(), PDO::PARAM_STR);
			$req->bindValue(':IBAN', $unAbonne->getIBAN(), PDO::PARAM_STR);
			$req->bindValue(':TYPEUTILISATEUR', $unAbonne->gettypeUtilisateur(), PDO::PARAM_STR);
			$req->execute();
			
			

		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
			die();
		}

		
	}

	public function editAbonne($unAbonne){
	try {
		$req = $this->prepare("update utilisateur set NOM=:NOM, PRENOM=:PRENOM, DATENAISSANCE=:DATENAISSANCE, RUE=:RUE, 
		VILLE=:VILLE, CODEPOSTAL=:CODEPOSTAL, CIVILITE=:CIVILITE, SEXE=:SEXE, SECONDPRENOM=:SECONDPRENOM, TELEPHONE=:TELEPHONE, MAIL=:MAIL, IDENTIFIANT=:IDENTIFIANT, MOTDEPASSE=:MOTDEPASSE, 
		NUMPERMIS=:NUMPERMIS, LIEUOBTENTION=:LIEUOBTENTION, DATEOBTENTION=:DATEOBTENTION, TITULAIRECOMPTE=:TITULAIRECOMPTE, COMPTE=:COMPTE, BIC=:BIC, IBAN=:IBAN
		where NUMABONNE=:NUMABONNE ");

		$req->bindValue(':NUMABONNE', $unAbonne->getnumero(), PDO::PARAM_STR);		
		$req->bindValue(':NOM', $unAbonne->getnom(), PDO::PARAM_STR);
		$req->bindValue(':PRENOM', $unAbonne->getprenom(), PDO::PARAM_STR);
		$req->bindValue(':DATENAISSANCE', $unAbonne->getdatenaissance(), PDO::PARAM_STR);
		$req->bindValue(':RUE', $unAbonne->getrue(), PDO::PARAM_STR);
		$req->bindValue(':VILLE', $unAbonne->getville(), PDO::PARAM_STR);
		$req->bindValue(':CODEPOSTAL', $unAbonne->getcodepostal(), PDO::PARAM_STR);
		$req->bindValue(':CIVILITE', $unAbonne->getcivilite(), PDO::PARAM_STR);
		$req->bindValue(':SEXE', $unAbonne->getsexe(), PDO::PARAM_STR);
		$req->bindValue(':SECONDPRENOM', $unAbonne->getsecondprenom(), PDO::PARAM_STR);
		$req->bindValue(':TELEPHONE', $unAbonne->gettelephone(), PDO::PARAM_STR);
		$req->bindValue(':MAIL', $unAbonne->getmail(), PDO::PARAM_STR);
		$req->bindValue(':IDENTIFIANT', $unAbonne->getidentifiant(), PDO::PARAM_STR);
		$req->bindValue(':MOTDEPASSE', $unAbonne->getmotdepasse(), PDO::PARAM_STR);
		$req->bindValue(':NUMPERMIS', $unAbonne->getnumpermis(), PDO::PARAM_STR);
		$req->bindValue(':LIEUOBTENTION', $unAbonne->getlieuobtention(), PDO::PARAM_STR);
		$req->bindValue(':DATEOBTENTION', $unAbonne->getdateobtention(), PDO::PARAM_STR);
		$req->bindValue(':TITULAIRECOMPTE', $unAbonne->gettitulairecompte(), PDO::PARAM_STR);
		$req->bindValue(':COMPTE', $unAbonne->getcompte(), PDO::PARAM_STR);
		$req->bindValue(':BIC', $unAbonne->getRIB(), PDO::PARAM_STR);
		$req->bindValue(':IBAN', $unAbonne->getIBAN(), PDO::PARAM_STR);
		$req->execute();
		
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage();
		die();
	}
	
	}


	public function editAbonneSecretaire($unAbonne){
	try {
		$req = $this->prepare("update utilisateur set NOM=:NOM, PRENOM=:PRENOM, DATENAISSANCE=:DATENAISSANCE, RUE=:RUE, 
		VILLE=:VILLE, CODEPOSTAL=:CODEPOSTAL, CIVILITE=:CIVILITE, SEXE=:SEXE, SECONDPRENOM=:SECONDPRENOM, TELEPHONE=:TELEPHONE, MAIL=:MAIL, IDENTIFIANT=:IDENTIFIANT, MOTDEPASSE=:MOTDEPASSE, 
		NUMPERMIS=:NUMPERMIS, LIEUOBTENTION=:LIEUOBTENTION, DATEOBTENTION=:DATEOBTENTION, TITULAIRECOMPTE=:TITULAIRECOMPTE, COMPTE=:COMPTE, BIC=:BIC, IBAN=:IBAN, PIECEJOINTE=:PIECEJOINTE, TYPEABONNEMENT=:TYPEABONNEMENT
		where IDENTIFIANT=:ID ");

		$req->bindValue(':ID', $unAbonne->getidentifiant(), PDO::PARAM_STR);	
		$req->bindValue(':NOM', $unAbonne->getnom(), PDO::PARAM_STR);
		$req->bindValue(':PRENOM', $unAbonne->getprenom(), PDO::PARAM_STR);
		$req->bindValue(':DATENAISSANCE', $unAbonne->getdatenaissance(), PDO::PARAM_STR);
		$req->bindValue(':RUE', $unAbonne->getrue(), PDO::PARAM_STR);
		$req->bindValue(':VILLE', $unAbonne->getville(), PDO::PARAM_STR);
		$req->bindValue(':CODEPOSTAL', $unAbonne->getcodepostal(), PDO::PARAM_STR);
		$req->bindValue(':CIVILITE', $unAbonne->getcivilite(), PDO::PARAM_STR);
		$req->bindValue(':SEXE', $unAbonne->getsexe(), PDO::PARAM_STR);
		$req->bindValue(':SECONDPRENOM', $unAbonne->getsecondprenom(), PDO::PARAM_STR);
		$req->bindValue(':TELEPHONE', $unAbonne->gettelephone(), PDO::PARAM_STR);
		$req->bindValue(':MAIL', $unAbonne->getmail(), PDO::PARAM_STR);
		$req->bindValue(':IDENTIFIANT', $unAbonne->getidentifiant(), PDO::PARAM_STR);
		$req->bindValue(':MOTDEPASSE', $unAbonne->getmotdepasse(), PDO::PARAM_STR);
		$req->bindValue(':NUMPERMIS', $unAbonne->getnumpermis(), PDO::PARAM_STR);
		$req->bindValue(':LIEUOBTENTION', $unAbonne->getlieuobtention(), PDO::PARAM_STR);
		$req->bindValue(':DATEOBTENTION', $unAbonne->getdateobtention(), PDO::PARAM_STR);
		$req->bindValue(':TITULAIRECOMPTE', $unAbonne->gettitulairecompte(), PDO::PARAM_STR);
		$req->bindValue(':COMPTE', $unAbonne->getcompte(), PDO::PARAM_STR);
		$req->bindValue(':BIC', $unAbonne->getRIB(), PDO::PARAM_STR);
		$req->bindValue(':IBAN', $unAbonne->getIBAN(), PDO::PARAM_STR);
		$req->bindValue(':PIECEJOINTE', $unAbonne->getpiecejointe(), PDO::PARAM_STR);
		$req->bindValue(':TYPEABONNEMENT', $unAbonne->gettypeabonnement(), PDO::PARAM_STR);
		$req->execute();
		
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage();
		die();
	}
	
	}
		
	
}
/*if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
	header('Content-Type:text/plain');

	$unAbonneDAO = new AbonneDAO();
	//print_r($unAbonneDAO->getAbonnes());
	//print_r($unAbonneDAO->getAbonneByMail("carrascovincent8@gmail.com"));

	$unAbonne = new Abonne();
	$unAbonne->setnumero("2");
	$unAbonne->setCodePaiment("56");
	$unAbonne->setCodeFormule("22");
	$unAbonne->setnom("liaud");
	$unAbonne->setprenom("Lola");
	$unAbonne->setdatenaissance('08/10/1997');
	$unAbonne->setrue("13bis avenue de la chance");
	$unAbonne->setville("13bis avenue de la chance");
	$unAbonne->setcodepostal("13bis avenue de la chance");
	$unAbonne->setsexe("masculin");
	$unAbonne->setcivilite("mr.");
	$unAbonne->setSexe("masculin");
	$unAbonne->setsecondprenom("mr.");
	$unAbonne->settelephone("0506070809");
	$unAbonne->setmail("jlliaud@gmail.com");
	$unAbonne->setidentifiant("jo");
	$unAbonne->setmotdepasse("967eeee");
	$unAbonne->setnumpermis("045712");
	$unAbonne->setlieuobtention("roube");
	$unAbonne->setdateobtention('06/05/2015');
	$unAbonne->setcompte("compte1");
	$unAbonne->settitulairecompte("jean");
	$unAbonne->setRIB("0550505");
	$unAbonne->setIBAN("5800A50");
	$unAbonne->settypeUtilisateur("secretaire");
	print_r($unAbonneDAO->addAbonne($unAbonne));
	print_r("puddddddding");

}*/