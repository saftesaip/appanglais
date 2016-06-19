<?php
//@thibautkaczynski
function get_concerts()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM concert,artiste where concert.IDArtiste=artiste.IDArt ");
	$req->execute();
    $concerts = $req->fetchAll();
        
    return $concerts;
}
	