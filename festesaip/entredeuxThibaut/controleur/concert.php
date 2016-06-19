<?php
//récupération des infos  correspondant à l'artiste  choisi auparavant
	include_once('modele/mod_concert.php');
	$concerts = get_concert() ;
// affichage de la vue associée
	include_once('vue/vue_concerts.php');
