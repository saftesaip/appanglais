<!--
/*
    @author Antoine BARBIN
    @source w3schools.com + un ancien projet 
    le 08/06/2016
*/
-->
<html>
    <head>
                <link rel="stylesheet" href="vue/style.css" />

    </head>
    <body>
        
        <div id="">
            
            <script type="text/javascript">
            var defile;// l'element a deplacer 
            var psinit = 580; // position horizontale de depart 
            var pscrnt = psinit;       
            function texteDefile() { 
               if (!defile) defile = document.getElementById('defile'); 
               if (defile) { 
                  if(pscrnt < ( - defile.offsetWidth) ){ 
                     pscrnt = psinit; 
                            } else { 
                     pscrnt+= -1; // pixel par deplacement 
                  } 
                  defile.style.left = pscrnt+"px"; 
               } 
            } 
            setInterval("texteDefile()",20); // delai de deplacement 
            </script>
            <style type="text/css">
            #artiste-defiler { position:relative; width:580px; height:20px; overflow:hidden;  } 
            #defile { position:absolute; margin-top:1px; background-color:transparent; }
            </style>
            
            <div id="artiste-defiler">
                <div id="defile">Voila un tres joli texte defilant</div>
            </div>
            
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
    </body>
</html>



