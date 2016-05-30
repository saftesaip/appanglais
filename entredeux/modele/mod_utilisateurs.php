<?php

function get_utilisateurs()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM utilisateur");
	$req->execute();
    $users = $req->fetchAll();
        
    return $users;
}


