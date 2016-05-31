<?php

//récupération de l'identifiant artiste passé en paramètre
	$idArtisteChoisi = $_GET["choixId"];
	
	
//récupération des infos  correspondant à l'artiste  choisi auparavant
	include_once('modele/mod_detailArtiste.php');
	$artisteChoisi = get_detailArtiste($idArtisteChoisi);
	

// affichage de la vue associée
	include_once('vue/vue_detailArtiste.php');
