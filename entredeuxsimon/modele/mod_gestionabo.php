<?php
function abonnement($user,$panier,$temps,$debut)
{
global $bdd;
    $req = $bdd->prepare("INSERT INTO abonnement (idUtilisateur , idPanier , duree , dateDebut) VALUES ()");
	$req->execute();
}
?>