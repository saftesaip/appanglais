<?php
	if(isset($_GET["register"]) AND $_GET["register"] == "paiement valide")
	{
		include_once('modele/mod_gestionabo.php');
		abonnement($_SESSION["idUtil"],$_GET["idpanier"],$_GET["mois"]);
		header("location:index.php?section=gestioncompte&gestion=abonnements");
	}else{
		header("location:index.php?section=paniers");
	}
?>