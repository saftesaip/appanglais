<!--
/*
    @author Antoine BARBIN / Simon CHATELAIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<?php
function get_sponsors()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM sponsor");
	$req->execute();
    $sponsors = $req->fetchAll();
        
    return $sponsors;
}

