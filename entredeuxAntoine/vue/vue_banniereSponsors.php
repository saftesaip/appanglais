<!DOCTYPE html>
<!--
/*
    @author Antoine BARBIN / Simon CHATELAIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<html>
    <body>
        <div class="slideshow-sponsor" >
            <ul>
                <?php
                    //affichage des sponsors
                    foreach($sponsors as $sponsor)
                    {	
			$nomSponsor=$sponsor['NomSponsor'];
			$imgSponsor=$sponsor['ImgSponsor'];
			$lienSponsor=$sponsor['LienSponsor'];
			
			echo '<li><a href="'.$lienSponsor.'" target="_blank"><img src="'.$imgSponsor.'" alt="'.$nomSponsor.'"></a></li>' ;			
                    }
		?>       
            </ul>
        </div>
        
        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $(".slideshow-sponsor ul").animate({marginLeft:-130},800,function(){
                       $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
                    })
                }, 3000);
            });
        </script>
    </body>
</html>