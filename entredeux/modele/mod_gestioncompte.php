<?php

function get_info_adh($idadh)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM utilisateur , abonnement WHERE utilisateur.idUtil = abonnement.idUtilisateur AND utilisateur.idUtil = '".$idadh."'");
	$req->execute();
    $adh = $req->fetch();
        
    return $adh;
}