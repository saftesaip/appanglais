<?php
include_once('vue_entete.php');

$nom = $_SESSION['nomUtil'];
$prenom = $_SESSION['prenomUtil'];
echo"<H1>Bienvenue ".$prenom." ".$nom."</H1>";
?>
