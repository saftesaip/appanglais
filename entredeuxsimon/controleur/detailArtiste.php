<?php

//r�cup�ration de l'identifiant artiste pass� en param�tre
	$idArtisteChoisi = $_GET["choixId"];
	
	
//r�cup�ration des infos  correspondant � l'artiste  choisi auparavant
	include_once('modele/mod_detailArtiste.php');
	$artisteChoisi = get_detailArtiste($idArtisteChoisi);
	

// affichage de la vue associ�e
	include_once('vue/vue_detailArtiste.php');
