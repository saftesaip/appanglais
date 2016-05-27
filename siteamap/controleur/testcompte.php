<?php

if (!isset($_SESSION['loginUtil']) or $_SESSION['loginUtil'] == "")
{
	header("location:index.php?section=seconnecter");
}else{
	header("location:index.php?section=gestioncompte")
}
?>