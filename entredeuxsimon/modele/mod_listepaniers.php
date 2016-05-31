<?php
function get_paniers()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM panier , type_panier , taille_panier WHERE panier.idType = type_panier.idType AND panier.idTaille = taille_panier.idTaille ORDER BY panier.idType");
	$req->execute();
    $paniers = $req->fetchAll();
        
    return $paniers;
}
