<!--
/*
    @author Antoine BARBIN / Simon CHATELAIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<?php

//REcupération des sponsors depuis la base de données 
include_once('modele/mod_sponsors.php');
$sponsors = get_sponsors() ;

include_once('modele/mod_artiste.php');
$artistes = get_artistes() ;

// affichage de  la    vue associée
include_once('vue/vue_accueil.php');
include_once("vue/vue_banniereSponsors.php");
