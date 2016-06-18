<!--
/*
    @author Antoine BARBIN / Simon CHATELAIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<?php
function get_artistes()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM artiste");
	$req->execute();
    $artistes = $req->fetchAll();
        
    return $artistes;
}

