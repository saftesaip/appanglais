<?php 
	include "vue/vue_entete.php";

?>

<div id= 'Corps'>   
	  <H1>Informations du panier</H1>
<center>
	<table id=detailpanier>
		<tr>
			<td rowspan='4'><IMG  src="vue/images/<?php echo($wimage); ?>"></td>
			<td>Taille : <?php echo($wtaille); ?></BR></td>
		</tr><tr>
			<td> Type : <?php echo($wtype); ?></BR></td>
		</tr><tr>
			<td> prix : <?php echo($wprix);?>&euro; </BR></td>
		</tr><tr>
			<td> Description : <?php echo($wdescription);?></td>
		</tr>
	</table>
</center>


<form action="index.php?" method="get" name="aboPanier">
	<input type="hidden" name="section" value="validabo">
	<?php echo("<input type='hidden' name='idpanier' value=".$widpanier.">") ?>
	<table>
				
		<tr>
			<td><strong>S'abonner à ce panier ?</strong></td>
		</tr><tr>
			<td><label for="date"><strong>Date :</strong></label></td>
			<td><?php echo($today=date("d-m-Y")); ?></td>
		</tr><tr>
			<td><label for="debut"><strong>Date début :</strong></label></td>
			<td><?php echo ($datedebut); ?></td>
		</tr><tr>
			<td><label for="mois"><strong>Nombre de mois :</strong></label></td>
			<td><SELECT name="mois" size="1">
				<OPTION>1</OPTION>
				<OPTION>2</OPTION>
				<OPTION>3</OPTION>
				<OPTION>4</OPTION>
				<OPTION>5</OPTION>
				<OPTION>6</OPTION>
				<OPTION>7</OPTION>
				<OPTION>8</OPTION>
				<OPTION>9</OPTION>
				<OPTION>10</OPTION>
				<OPTION>11</OPTION>
				<OPTION>12</OPTION></td>
		</tr>
	</table>
<input type="submit" name="chocopause" value="s'abonner">
</form>
</div>
</body>
</html>








