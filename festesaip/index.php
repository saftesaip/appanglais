<?php

session_start();

include_once('modele/connexionbdd.php');
include_once('modele/FonctionsJS.js');
if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/accueil.php');
}
elseif ($_GET['section'] == 'Historique')
{  
	include_once('controleur/Historique.php');
}
elseif ($_GET['section'] == 'EquipesContact')
{  
	include_once('controleur/EquipesContact.php');
}	
elseif ($_GET['section'] == 'Sponsors')
{  
	include_once('controleur/Sponsors.php');
}
elseif ($_GET['section'] == 'Animations')
{  
	include_once('controleur/Animations.php');
}
elseif ($_GET['section'] == 'Stands')
{  
	include_once('controleur/Stands.php');
}
elseif ($_GET['section'] == 'Concerts')
{  
	include_once('controleur/Concerts.php');
}
elseif ($_GET['section'] == 'Camping')
{  
	include_once('controleur/Camping.php');
}
elseif ($_GET['section'] == 'Accessibilité')
{  
	include_once('controleur/Accessibilité.php');
}
elseif ($_GET['section'] == 'Venir')
{  
	include_once('controleur/Venir.php');
}

elseif ($_GET['section'] == 'seConnecter')
{  
	include_once('controleur/seConnecter.php');
}
elseif ($_GET['section'] == 'verifConnexion')
{  
	if(isset ($_SESSION['loginUtil']))
	{
		$cnxAdh='d';
	}else{
		$cnxAdh='v';
	}
		include_once('controleur/gestionConnexionAdh.php');
}
elseif ($_GET['section'] == 'connexionReussie')
{  	
	include_once('controleur/connexionReussie.php');
}
?>