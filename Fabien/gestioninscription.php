<?php
include_once('modele/mod_inscription.php');
include_once('modele/mod_utilisateurs.php');

//Si le login n'est pas déjà utilisé la fonction récupère les données présentes dans les champs et les envoient dans la fonction set_inscription.
if(testIns($_POST['login']))
{
	set_inscription($_POST['login'], $_POST['pass'], $_POST['nom'], $_POST['Prenom'], $_POST['Mail']);
	header("location:index.php?section=seConnecter&ins=i");
}else{
	header("location:index.php?section=inscription&bad=1");
}