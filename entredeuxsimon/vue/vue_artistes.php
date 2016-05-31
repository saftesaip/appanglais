<?php 
	include "vue/vue_entete.php";
 ?>
<html>
<div id= "Corps">
		<BR/> <H1>Les Artistes  </H1><BR/>    
	  
		<TABLE align="center">
                       
			<?php
				//affichage des artistes 
				foreach($lesartistes as $unArtiste)
				{	
					$wIdArt=$unArtiste['idArt'];
					$wNomArt=$unArtiste['nomArt'];
					$wPrenomArt=$unArtiste['prenomArt'];
					
					echo"  <TR><TD><A href='index.php?section=detailArtiste&choixId=$wIdArt'> $wNomArt"."   "."$wPrenomArt </A></TD>";
										
				}
			?>	
				
		</TABLE>
		  
</div>
</body>

</html>