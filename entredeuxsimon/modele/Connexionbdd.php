
<?php
/**
*Connexion � la base de donn�es*
*Author : Simon*
**/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=festesaip', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



