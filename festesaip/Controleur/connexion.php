<?php
	include_once("../modele/mod_connexion.php");
	$log=$_POST["login"];
	$pas=$_POST["pass"];
	$util=get_util($log, $pas);
	if($util['LogUtil'] != null)
	{
		$_SESSION['LogUtil']=$util['LogUtil'];
		echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
	}
	else 
	{
		echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
	}
?>
