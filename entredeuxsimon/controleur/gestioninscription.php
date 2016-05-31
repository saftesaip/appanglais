<?php
include_once('modele/mod_inscription.php');
include_once('modele/mod_utilisateurs.php');
	
if(testIns($_POST['login']))
{
	set_inscription($_POST['login'], $_POST['pass'], $_POST['nom'], $_POST['Prenom'], $_POST['Adresse'], $_POST['Ville'], $_POST['CP'], $_POST['Telephone'], $_POST['TelMob'], $_POST['Mail']);
	header("location:index.php?section=seConnecter&ins=i");
}else{
	header("location:index.php?section=inscription&bad=1");
}