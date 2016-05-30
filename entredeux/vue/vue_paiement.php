<?php 
	include "vue/vue_entete.php";
?>
<H1>Phase de paiement</H1>
<form action="index.php?" method="get" name="aboPanier">
	<input type="hidden" name="section" value="gestionabo">
	<input type="hidden" name="idpanier" value="<?php echo($idpanier);?>">
	<input type="hidden" name="mois" value="<?php echo($mois);?>">
	<input type="hidden" name="prix" value="<?php echo($prix);?>">
	<input type="submit" name="register" value="paiement valide" />