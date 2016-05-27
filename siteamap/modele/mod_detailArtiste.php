<?php
function get_detailArtiste($idArtiste)
{
global $bdd;
$req=$bdd->prepare("SELECT * FROM artiste WHERE idArt=".$idArtiste);
$req->execute();
$detailArtiste=$req->fetch();
return $detailArtiste;
}
?>