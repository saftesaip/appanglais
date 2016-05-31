<?php

if(!isset($_SESSION["idUtil"]))
{
	header("location:index.php?section=seConnecter");
}else{
include_once('modele/mod_panier.php');

$idpanier=$_GET["idpanier"];
$mois=$_GET["mois"];
$panier = get_info_panier($idpanier);
$wpanier = $panier['libelleTaille']." panier de ".$panier['libelleType'];
$wprix=$panier['prix'];

include_once("vue/vue_validabo.php");
}
?>