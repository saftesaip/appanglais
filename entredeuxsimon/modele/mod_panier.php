<?php
function get_info_panier($idpanier)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM panier , type_panier , taille_panier WHERE panier.idType = type_panier.idType AND panier.idTaille = taille_panier.idTaille AND idpanier = ".$idpanier." ORDER BY panier.idType");
	$req->execute();
    $panier = $req->fetch();
        
    return $panier;
}
