<?php 
	include "vue/vue_entete.php";
?>

<center>
	<H1>Recapitulatif :</H1></BR>
	<table>
		<tr>
			<td>Panier : <?php echo($wpanier); ?></BR></td>
		</tr><tr>
			<td> Temps d'abonnement : <?php echo($mois); ?> mois</BR></td>
		</tr><tr>
			<td> prix : <?php echo($wprix);?>&euro; </BR></td>
		</tr>
	</table>
	<form action="index.php?" method="get" name="aboPanier">
	<input type="hidden" name="section" value="paiement">
	<input type="hidden" name="idpanier" value="<?php echo($idpanier);?>">
	<input type="hidden" name="mois" value="<?php echo($mois);?>">
	<input type="hidden" name="prix" value="<?php echo($wprix);?>">
		Voulez vous souscrire &agrave; ce panier?
		<input type="submit" name="register" value="oui" />
		<input type="submit" name="register" value="non" />

	</form>  
</center>