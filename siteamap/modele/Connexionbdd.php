
<?php

// Connexion � la base de donn�es bddArtotheque
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=amap', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



