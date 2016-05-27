<?php
$inscription=$_POST['inscription'];
if($inscription!="inscription"){

if($cnxAdh=='v')
{
$wlogin=$_POST['TLogin'];
$wmdp=$_POST['TMdp'];

include_once('modele/mod_appli.php');

$Adh=get_adherent($wlogin,$wmdp);

if($Adh['nomUtil'] != null)
{

$_SESSION['idUtil']=$Adh['idUtil'];
$_SESSION['nomUtil']=$Adh['nomUtil'];
$_SESSION['prenomUtil']=$Adh['prenomUtil'];
$_SESSION['loginUtil']=$Adh['loginUtil'];

header("location:index.php?section=connexionReussie");

}else{

header("location:index.php?section=seConnecter");

}
}else{

session_destroy();
header("location:index.php?section=index");

}

}else{
header("location:index.php?section=inscription");
}

?>