<?php
	
//récupèration de l'ensemble des artistes dans la base
	include_once('modele/mod_utilisateurs.php');
	
	$lesutilisateurs = get_utilisateurs();
	
	
// affichage de la vue associée
	include_once('vue/vue_utilisateurs.php');