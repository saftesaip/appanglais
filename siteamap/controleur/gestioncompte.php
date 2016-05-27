<?php
if(!isset($_SESSION["idUtil"]))
{
	header("location:index.php?section=seConnecter");
}else{
	include_once('modele/mod_gestioncompte.php');
	include_once('vue/vue_menucompte.php');
	
	$adh=get_info_adh($_SESSION["idUtil"]);
	echo("zouzou  ".$adh['idUtil']);

	if (!isset($_GET['gestion']) OR $_GET['gestion'] == 'informations')
	{
		include_once('controleur/informations.php');
	}
	else
	{
		if ($_GET['gestion'] == 'abonnements')
		{  
			include_once('controleur/abonnements.php');
		}
		if ($_GET['gestion'] == 'factures')
		{  
			include_once('controleur/factures.php');
		}
	}
	
}
?>