<?php 
	include "vue/vue_entete.php";

?>
<div id= 'Corps'>
		<BR/> <H1>Les Oeuvres de <?php echo $artiste['prenomArt']." ".$artiste['nomArt'] ?> </H1><BR/>    
	  
		<TABLE align='center'>";
			<?php
				//affichage des artistes 
				foreach($lesoeuvres as $uneoeuvre)
				{	
					$wtitreOeuv=$uneoeuvre['titreOeuv'];
					$wimgOeuv=$uneoeuvre['imgOeuv'];
					$wprixOeuv=$uneoeuvre['prixOeuv'];
					$wprixLoc=$uneoeuvre['prixLoc'];
					$whauteur=$uneoeuvre['hauteur'];
					$wlargeur=$uneoeuvre['largeur'];

					echo"  <TR><TD><IMG src=./vue/images/imagesOeuvres/".$wimgOeuv."></TD><TD></BR></BR>".$wtitreOeuv."</BR></BR> Dimensions : ".$whauteur." x ".$wlargeur."</BR></BR> Location : ".$wprixLoc."€/mois </BR></BR> Prix : ".$wprixOeuv."€ </TD></TR>";
										
				}
			?>	
				
		</TABLE>
		  
</div>
</body>

</html>