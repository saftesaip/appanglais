<!DOCTYPE html>
<!--
/*
    @author Antoine BARBIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<html>
    <body>
        
        <div class="slideshow-artiste" >
            <ul>
                <?php
                    //affichage des artistes
                    foreach($artistes as $artiste)
                    {	
			$nomArtiste=$artiste['NomArt'];
			$imgArtiste=$artiste['ImageArt'];
			
			echo '<li><img src="'.$imgArtiste.'" alt="'.$nomArtiste.'"></li>' ;			
                    }
		?>                
            </ul>
        </div>

        <div class = 'articlePrincipal'>
            <h1>PRESENTATION</h1>
            <p class='article'>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        
        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $(".slideshow-artiste ul").animate({marginLeft:-266},800,function(){
                       $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
                    })
                }, 1500);
            });
        </script>
    </body>
</html>