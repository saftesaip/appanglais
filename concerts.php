<?php
//récupération des infos  correspondant à l'artiste  choisi auparavant
	include_once('modele/mod_concerts.php');
	$concerts = get_concerts() ;
// affichage de la vue associée
	include_once('vue/vue_concerts.php');
