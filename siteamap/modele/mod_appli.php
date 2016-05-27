<?php
function get_adherent($log,$mdp)
{
global $bdd;
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE loginUtil = '".$log."' AND motdepasseUtil = '".$mdp."' ");
	$req->execute();
    $adh = $req->fetch();
    return $adh;
	}
?>