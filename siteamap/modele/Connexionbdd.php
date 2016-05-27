
<?php

// Connexion à la base de données bddArtotheque
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=amap', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



