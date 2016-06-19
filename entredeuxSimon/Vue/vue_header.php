<!--
/*
    @author Antoine BARBIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->

<html>
    <head>
        <title>Fest'Esaip</title>
        <link rel="stylesheet" href="vue/style.css" />
        
    </head>
    <body>
        <header>
            <div id='header'>
                
               <!--  <img src="modele/logo.PNG" alt="Logo Fest'Esaip"/> -->
            
                <div id='titre'>
                    <h1>Le festival de musique de l'ESAIP le 28, 29, 30 juillet 2016</h1>  
                </div>
            
                <div id='menu'>
                    <ul>
                        <li>
                            <a href="index.php?section=accueil">Accueil</a>						
                        </li>

                        <li>
                            <a href="#">Fest'Esaip</a>
                                <ul>
                                    <li>
                                        <a href="index.php?section=Historique">Historique</a>
                                    </li>
                                    <li>
                                        <a href="index.php?section=EquipesContact">Équipes / Contact</a>
                                    </li>
                                    <li>
                                        <a href="index.php?section=Sponsors">Sponsors</a>
                                    </li>
                                </ul>
                        </li>				
                        <li>
                            <a href="#">Programmation</a>
                                <ul>
                                    <li>
                                        <a href="index.php?section=Animations">Animations</a>
                                    </li>
                                    <li>
                                        <a href="index.php?section=Stands">Stands</a>
                                    </li>
                                    <li>
                                        <a href="index.php?section=Concerts">Concerts</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#">Infos pratiques</a>
                            <ul>
                                <li>
                                    <a href="index.php?section=Camping">Camping</a>
                                </li>
                                <li>
                                    <a href="index.php?section=Accessibilite">Accessibilité</a>
                                </li>
                                <li>
                                    <a href="index.php?section=Venir">Venir au Fest'Esaip</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">S'inscrire / Tickets</a>
                        </li>
                    </ul>
					                            <?php
							include_once("vue/vue_connexion.php");
							?>
                </div>
            </div>
        </header>
    </body>
</html>




