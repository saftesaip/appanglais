<?php
	
//r�cup�ration de l'ensemble des artistes dans la base
	include_once('modele/mod_artistes.php');
	
	$lesartistes = get_artistes();
	
	
// affichage de la vue associ�e
	include_once('vue/vue_artistes.php');
