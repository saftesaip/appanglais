<?php
function get_oeuvres($idArt)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT oeuvre.*, prixLoc FROM oeuvre, tarif WHERE oeuvre.idArtiste=".$idArt." AND codeTarifOeuv = codeTarif");
	$req->execute();
    $oeuvres = $req->fetchAll();
        
    return $oeuvres;
}




