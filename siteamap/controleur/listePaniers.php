<?php
//récupération des infos  correspondant à l'artiste  choisi auparavant
	include_once('modele/mod_listepaniers.php');
	$paniers = get_paniers() ;
// affichage de la vue associée
	include_once('vue/vue_listepaniers.php');
