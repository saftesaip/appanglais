<div id= 'Corps'>
		<BR/> <H1>Les paniers : </H1><BR/>    
	  
		<TABLE align='center'>
			<?php
				//affichage des paniers
				$i=-1;
				foreach($concerts as $concert)
				{	
					$i=$i+1;
					$wnom=$concert['NomArt'];
					$wimage=$panier['ImageArt'];
					$wHDeb=$panier['HDebConcert'];
					$wHFin=$panier['HFinConcert'];
					if($i%3 == 0)
					{
						echo "<TR>";
					}
					echo"<TD>".$wnom."  ".$wimage."</BR><a href=index.php?section=detailpanier&idpanier=".$wHDeb."><IMG  src=vue/images/".$wHFin."></a></TD>";
					if($i%3 == 2)
					{
						echo "</TR>";
					}					
				}
			?>	
				
		</TABLE>
		  
</div>