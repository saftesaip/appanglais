<?php

function get_utilisateurs($logutil, $passutil)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE LogUtil=".$logutil." AND MDPUtil=".$passutil);
	$req->execute();
    $users = $req->fetchAll();
        
    return $users;
}


