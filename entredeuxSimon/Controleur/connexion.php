<?php
	include_once("../Modele/mod_connexion.php");
	$log=$_POST["login"];
	$pas=$_POST["pass"];
	$util=get_utilisateurs($log, $pas);
	
	if($util['LogUtil'] != null)
	{
		$_SESSION['IDUtil']=$Adh['IDUtil'];
		$_SESSION['LogUtil']=$Adh['LogUtil'];
		echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
	}
	else 
	{
		echo "1"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
	}
?>
