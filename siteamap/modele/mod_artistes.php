<?php

function get_artistes()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT idArt,nomArt,prenomArt FROM artiste   order by nomArt,prenomArt");
	$req->execute();
    $artistes = $req->fetchAll();
        
    return $artistes;
}




