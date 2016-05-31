<?php

function set_inscription($unlog, $unMdp, $unNom, $unPrenom, $uneAdr, $uneVille, $unCP, $unTel, $unTelMob, $unMail)
{
    global $bdd;
           
    $req = $bdd->prepare("INSERT INTO utilisateur(nomUtil, prenomUtil, rueUtil, codePostalUtil, villeUtil, telephoneUtil, telephoneMobileUtil, mailUtil, loginUtil, motdepasseUtil) Values('".$unNom."' , '".$unPrenom."' , '".$uneAdr."' , '".$unCP."' , '".$uneVille."' , '".$unTel."' , '".$unTelMob."' , '".$unMail."' , '".$unlog."' , '".$unMdp."') ");
	$req->execute();

        
}

function testIns($unlog)
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE loginUtil='".$unlog."'");
	$req->execute();
	$test=$req->fetch();
	if($test ==""){
	return true;
	}else{
	return false;
	}
}