<?php
class Abonne {
	private $_NumAbonne;
	private $_CodePaiement;
	private $_CodeFormule;
	private $_nom;
	private $_prenom;
	private $_dateNaiss;
	private $_rue;
	private $_ville;
	private $_codepostal;
	private $_civilite;
	private $_sexe;
	private $_secondprenom;
	private $_telephone;
	private $_mail;
	private $_identifiant;
	private $_motDePasse;
	private $_confirmermdp;
	private $_numeroPermis;
	private $_lieuObtentionPermis;
	private $_dateObtentionPermis;
	private $_compteCle;
	private $_titulaireCompte;
	private $_bic;
	private $_iban;
	private $_typeUtilisateur;
	private $_piecejointe;
	private $_typeabonnement;

	private $_complement;
	private $_telmobile;
	private $_autrecont;
	private $_modePaiement;
	private $_modeFacturation;
	private $_nomBanque;
	private $_banqueGuichet;


	function __construct(){}


	public function getnumero(){
		return $this->_NumAbonne;
	}

	public function setnumero($_numero){
		$this->_NumAbonne = $_numero;
	}
	
	public function getCodePaiment(){
		return $this->_CodePaiement;
	}
	
	public function setCodePaiment($_cp){
		$this->_CodePaiement = $_cp;
	}
	
	public function getCodeFormule(){
		return $this->_CodeFormule;
	}
	
	public function setCodeFormule($_cf){
		$this->_CodeFormule = $_cf;
	}

	public function getnom(){
		return $this->_nom;
	}

	public function setnom($_nom){
		$this->_nom = $_nom;
	}

	public function getprenom(){
		return $this->_prenom;
	}

	public function setprenom($_prenom){
		$this->_prenom = $_prenom;
	}

	public function getdatenaissance(){
		return $this->_dateNaiss;
	}

	public function setdatenaissance($_dateN){
		$this->_dateNaiss = $_dateN;
	}

	public function getrue(){
		return $this->_rue;
	}

	public function setrue($_rue){
		$this->_rue = $_rue;
	}

	public function getville(){
		return $this->_ville;
	}

	public function setville($_ville){
		$this->_ville = $_ville;
	}

	public function getcodepostal(){
		return $this->_codepostal;
	}

	public function setcodepostal($_codepostal){
		$this->_codepostal = $_codepostal;
	}

	public function getcivilite(){
		return $this->_civilite;
	}

	public function setcivilite($_civilite){
		$this->_civilite = $_civilite;
	}

	public function getsexe(){
		return $this->_sexe;
	}

	public function setsexe($_sexe){
		$this->_sexe = $_sexe;
	}

	public function getsecondprenom(){
		return $this->_secondprenom;
	}

	public function setsecondprenom($_secondprenom){
		$this->_secondprenom = $_secondprenom;
	}

	public function gettelephone(){
		return $this->_telephone;
	}

	public function settelephone($_tel){
		$this->_telephone = $_tel;
	}

	public function getmail(){
		return $this->_mail;
	}

	public function setmail($_mail){
		$this->_mail = $_mail;
	}

	public function getidentifiant(){
		return $this->_identifiant;
	}

	public function setidentifiant($_identifiant){
		$this->_identifiant = $_identifiant;
	}

	public function getmotdepasse(){
		return $this->_motDePasse;
	}

	public function setmotdepasse($_mdp){
		$this->_motDePasse = $_mdp;
	}


	public function getnumpermis(){
		return $this->_numeroPermis;
	}

	public function setnumpermis($_numeroP){
		$this->_numeroPermis = $_numeroP;
	}

	public function getlieuobtention(){
		return $this->_lieuObtentionPermis;
	}

	public function setlieuobtention($_lieuobtention){
		$this->_lieuObtentionPermis = $_lieuobtention;
	}

	public function getdateobtention(){
		return $this->_dateObtentionPermis;
	}

	public function setdateobtention($_dateobtention){
		$this->_dateObtentionPermis = $_dateobtention;
	}

	public function getcompte(){
		return $this->_compteCle;
	}

	public function setcompte($_compte){
		$this->_compteCle = $_compte;
	}

	public function gettitulairecompte(){
		return $this->_titulaireCompte;
	}

	public function settitulairecompte($_titulairecompte){
		$this->_titulaireCompte = $_titulairecompte;
	}

	public function getRIB(){
		return $this->_bic;
	}

	public function setRIB($_BIC){
		$this->_bic = $_BIC;
	}

	public function getIBAN(){
		return $this->_iban;
	}

	public function setIBAN($_IBAN){
		$this->_iban = $_IBAN;
	}
	public function gettypeUtilisateur(){
		return $this->_typeUtilisateur;
	}

	public function settypeUtilisateur($_typeUtilisateur){
		$this->_typeUtilisateur = $_typeUtilisateur;
	}

	public function getpiecejointe(){
		return $this->_piecejointe;
	}

	public function setpiecejointe($_pj){
		$this->_piecejointe = $_pj;
	}

	public function gettypeabonnement(){
		return $this->_typeabonnement;
	}

	public function settypeabonnement($_ta){
		$this->_typeabonnement = $_ta;
	}

	public function getcomplement(){
		return $this->_complement;
	}

	public function setcomplement($_comp){
		$this->_complement = $_comp;
	}

	public function gettelmobile(){
		return $this->_telmobile;
	}

	public function settelmobile($_tm){
		$this->_telmobile = $_tm;
	}

	public function getautrecont(){
		return $this->_autrecont;
	}

	public function setautrecont($_ac){
		$this->_autrecont = $_ac;
	}


	public function getmodepaiement(){
		return $this->_modePaiement;
	}

	public function setpaiement($_mpaiement){
		$this->_modePaiement = $_mpaiement;
	}

	public function getmodefacturation(){
		return $this->_modeFacturation;
	}

	public function setfacturation($_mfacturation){
		$this->_modeFacturation = $_mfacturation;
	}

	public function getnombanque(){
		return $this->_nomBanque;
	}

	public function setnombanque($_nombanque){
		$this->_nomBanque = $_nombanque;
	}

	public function getguichet(){
		return $this->_banqueGuichet;
	}

	public function setguichet($_guichet){
		$this->_banqueGuichet = $_guichet;
	}


}
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__){
//prog de test
header('Content-Type:text/plain');

//Creation d'un abonnee

$unAbonne = new Abonne();
$unAbonne->setnumero("2");
$unAbonne->setnom("liaud");
$unAbonne->setprenom("Lola");
$unAbonne->setdatenaissance('08/10/1997');
$unAbonne->setrue("13bis avenue de la chance");
$unAbonne->setville("13bis avenue de la chance");
$unAbonne->setcodepostal("13bis avenue de la chance");
$unAbonne->setsexe("masculin");
$unAbonne->setcivilite("mr.");
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

print_r($unAbonne);

	}