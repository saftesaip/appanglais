<?php
$register=$_GET["register"];
$idpanier=$_GET["idpanier"];
$mois=$_GET["mois"];
$prix=$_GET["prix"];

if($register="oui")
{
	include_once('vue/vue_paiement.php');
}else{
header("location:index.php?section=seConnecter");
}
?>