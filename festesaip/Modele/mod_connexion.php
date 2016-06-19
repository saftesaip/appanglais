<?php

include_once('connexionbdd.php');
function get_util($logutil, $passutil)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT LogUtil, MDPUtil FROM utilisateur WHERE LogUtil='".$logutil."' AND MDPUtil='".$passutil."'");
	$req->execute();
    $users = $req->fetch();
    return $users;
}


