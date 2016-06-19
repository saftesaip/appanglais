<?php

// fonction récupérant les données rentrées dans les champs et les insérant dans la base de données.
function set_inscription($unlog, $unMdp, $unNom, $unPrenom, $unMail)
{
    global $bdd;
           
    $req = $bdd->prepare("INSERT INTO participants(nomParticipant, prenomParticipant, mailParticipant, loginParticipant, mdpParticipant) Values('".$unNom."' , '".$unPrenom."' , '".$unMail."' , '".$unlog."' , '".$unMdp."') ");
	$req->execute();

        
}

//fonction permettant la vérification qu'un login n'est pas déjà utilisé.
function testIns($unlog)
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM participants WHERE loginParticipant='".$unlog."'");
	$req->execute();
	$test=$req->fetch();
	if($test ==""){
	return true;
	}else{
	return false;
	}
}