
<div id= 'Corps'>
		<BR/> <H1>Les concerts : </H1><BR/>    
	  
		<TABLE align='center'>
			<?php
				//@thibautkaczynski
				$i=-1;
				foreach($concerts as $concert)
				{	
					$i=$i+1;
					$wnom=$concert['IDArtiste'];
					
					$wHDeb=$concert['HDebConcert'];
					$wHFin=$concert['HFinConcert'];
					if($i%3 == 0)
					{
						echo "<TR>";
					}
					echo"<TD>".$wnom." </TD>";
					if($i%3 == 2)
					{
						echo "</TR>";
					}					
				}
			?>	
				
		</TABLE>
		  
</div>