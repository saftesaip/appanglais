<?php 
	include "vue/vue_entete.php";

?>
<div id= 'Corps'>
		<BR/> <H1>Les paniers : </H1><BR/>    
	  
		<TABLE align='center'>
			<?php
				//affichage des paniers
				$i=-1;
				foreach($paniers as $panier)
				{	
					$i=$i+1;
					$wtaille=$panier['libelleTaille'];
					$wtype=$panier['libelleType'];
					$wimage=$panier['image'];
					$widpanier=$panier['idPanier'];
					if($i%3 == 0)
					{
						echo "<TR>";
					}
					echo"<TD>".$wtaille." panier de ".$wtype."</BR><a href=index.php?section=detailpanier&idpanier=".$widpanier."><IMG  src=vue/images/".$wimage."></a></TD>";
					if($i%3 == 2)
					{
						echo "</TR>";
					}					
				}
			?>	
				
		</TABLE>
		  
</div>
</body>

</html>