<p class=article>
		<TABLE>
			<?php
				//@thibautkaczynski
				
				foreach($concerts as $concert)
				{	
					
					$wnom=$concert['NomArt'];
					
					$wHDeb=$concert['HDebConcert'];
					$wHFin=$concert['HFinConcert'];
					
					
					echo "<TR>";
					
					echo"<TD>".$wnom." </TD>";
					echo"<TD>".$wHDeb." </TD>";
					echo"<TD>".$wHFin." </TD>";
					
					
					echo "</TR>";
									
				}
			?>	
		</TABLE>
		</p>