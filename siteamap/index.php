<?php

session_start();

include_once('modele/connexionbdd.php');
include_once('modele/FonctionsJS.js');
if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/accueil.php');
}
elseif ($_GET['section'] == 'paniers')
{  
	include_once('controleur/listePaniers.php');
}
elseif ($_GET['section'] == 'monCompte')
{  
	include_once('controleur/detailCompte.php');
}
elseif ($_GET['section'] == 'histoire')
{  
	include_once('controleur/histoire.php');
}	
elseif ($_GET['section'] == 'agriculteurs')
{  
	include_once('controleur/listeAgriculteurs.php');
}
elseif ($_GET['section'] == 'apropos')
{  
		include_once('controleur/apropos.php');
}
elseif ($_GET['section'] == 'detailpanier')
{  
	include_once('controleur/panier.php');
}
elseif ($_GET['section'] == 'inscription')
{  
	include_once('controleur/inscription.php');
}
elseif ($_GET['section'] == 'seConnecter')
{  
	include_once('controleur/seConnecter.php');
}
elseif ($_GET['section'] == 'gestionabo')
{  
	include_once('controleur/gestionabo.php');
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
elseif ($_GET['section'] == 'gestioninscription')
{  
	include_once('controleur/gestioninscription.php');
}
elseif ($_GET['section'] == 'testcompte')
{  
	include_once('controleur/testcompte.php');
}
elseif ($_GET['section'] == 'gestioncompte')
{  
	include_once('controleur/gestioncompte.php');
}
elseif ($_GET['section'] == 'validabo')
{  
	include_once('controleur/validabo.php');
}
elseif ($_GET['section'] == 'paiement')
{  
	include_once('controleur/paiement.php');
}
else
{    
	include_once('controleur/accueil.php');
}
	

?>

