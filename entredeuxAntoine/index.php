<!--
/*
    @author Antoine BARBIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<?php
    include("view/header.php");
    
    if (!isset($_GET['section']) OR $_GET['section'] == 'accueil')
{
    include_once('controler/accueil.php');
}
    include("view/footer.php");
?>

