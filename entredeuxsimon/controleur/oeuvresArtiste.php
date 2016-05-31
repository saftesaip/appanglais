<?php
//récupèration de l'ensemble des artistes dans la base
	include_once('modele/mod_detailArtiste.php');
	include_once('modele/mod_oeuvresArtiste.php');
	
	$lesoeuvres = get_oeuvres($_GET['idArt']);
	$artiste = get_detailArtiste($_GET['idArt']);
	
	
// affichage de la vue associée
	include_once('vue/vue_oeuvresArtiste.php');
