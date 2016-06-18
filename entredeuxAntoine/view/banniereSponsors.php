<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="modele/style.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $(".slideshow-sponsor ul").animate({marginLeft:-130},800,function(){
                       $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
                    })
                }, 3000);
            });
        </script>
    </head>
    <body>
        <div class="slideshow-sponsor" >
            <ul>
                <li><a href="http://www.heineken.com/fr" target="_blank"><img src="modele/heineken.jpg"></a></li>
                <li><img src="modele/img1.jpg"></li>
                <li><img src="modele/img3.jpg"></li>
                <li><img src="modele/img1.jpg"></li>
                <li><img src="modele/img1.jpg"></li>
                <li><img src="modele/img1.jpg"></li>
                <li><img src="modele/img2.jpg"></li>                
            </ul>
        </div>
    </body>
</html>