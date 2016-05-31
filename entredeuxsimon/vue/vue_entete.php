<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>accueil</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="vue/feuilleAMAP.css" rel="stylesheet" type="text/css" /> 
    </head>
	
<div id="logo">

<h1> AMAP BIO RASIER </h1>

<div id="ConnexionHaut">
<?php
if(isset($_SESSION['loginUtil']))
{

echo($_SESSION['loginUtil']."  <a href='index.php?section=verifConnexion'>se deconnecter</a>");

}else{
if((isset($_GET['section']) ) and ($_GET['section'] != 'seConnecter')){
	echo("<a href='index.php?section=seConnecter'>se connecter</a> "." <form name='inscription' action='index.php?section=inscription' method='post'>
	<input id='boutonhaut'type='submit' name='inscription' value='inscription'>
	</form> ");
	}
if(!isset($_GET['section'])){
	echo("<a href='index.php?section=seConnecter'>se connecter</a> "." <form name='inscription' action='index.php?section=inscription' method='post'>
	<input id='boutonhaut'type='submit' name='inscription' value='inscription'>
	</form> ");
	}
	
}
?>

</div>


</div>

<CENTER>
<table id="MenuHaut">
	<tr>
		<td><a href="index.php?section=index">Accueil</a></td>
		<td><a href="index.php?section=paniers">Nos Paniers</a></td>
		<td><a href="index.php?section=histoire">Notre Histoire</a></td>
		<td><a href="index.php?section=agriculteurs">Nos Agriculteurs</a></td>
		<td><a href="index.php?section=apropos">&Agrave; propos</a></td>
		<td><a href="index.php?section=gestioncompte">Gestion de Compte</a></td>
	</tr>
</table>
</CENTER>

</html>