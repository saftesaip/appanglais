<?php
//récupération des infos  correspondant à l'artiste  choisi auparavant
	include_once('modele/mod_panier.php');
	$panier = get_info_panier($_GET['idpanier']);
	
	$wtaille=$panier['libelleTaille'];
	$wtype=$panier['libelleType'];
	$wdescription=$panier['descriptionPanier'];
	$widpanier=$panier['idPanier'];
	$wimage=$panier['image'];
	$wprix=$panier['prix'];
	
	$jourdebut=intval(date("d"));
	$moisdebut=intval(date("m"));
	$andebut=intval(date("Y"));
	
	if($jourdebut >= 15)
	{
		$jourdebut=1;
		$moisdebut=$moisdebut+2;
	}else{
		$jourdebut=1;
		$moisdebut=$moisdebut+1;
	}
	
	if($moisdebut>=13)
	{
	$moisdebut=$moisdebut-12;
	$andebut=$andebut+1;
	}
	
	$datedebut = $jourdebut."-".$moisdebut."-".$andebut;

// affichage de la vue associée
	include_once('vue/vue_panier.php');
