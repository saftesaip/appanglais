
<?php

// Connexion � la base de donn�es bddArtotheque
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=festesaip', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



