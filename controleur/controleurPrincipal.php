<?php
/**
 * Created by PhpStorm.
 * User: jean-louisLiaud
 * Date: 02/01/2017
 * Time: 22:55
 */
session_start();


include_once 'lib/menu.php';
include_once 'dispatcher.php';
include_once 'modele/authentification.inc.php';
include_once 'modele/Abonne.php';

$autoM = new Menu('');
$unauth= new Authentification();


if(isset($_GET['menu'])){
    $_SESSION['menu']= $_GET['menu'];
}
else
{
    if(!isset($_SESSION['menu'])){
        $_SESSION['menu']="home";
    }
}

/*
$utilisateur= $unauth->getAbonneLoggedOn();

*/

$autoM->ajouterComposant($autoM->creerItemLien("home", "Home"));
$autoM->ajouterComposant($autoM->creerItemLien("projects", "Projects"));
$autoM->ajouterComposant($autoM->creerItemLien("about", "About"));
$autoM->ajouterComposant($autoM->creerItemLien("contact", "Contact"));




$menuPrincipal = $autoM->creerMenu($_SESSION['menu'],'menu');

include_once dispatcher::dispatch($_SESSION['menu']);
?>