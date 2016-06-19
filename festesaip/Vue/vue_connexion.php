<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="vue/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
	$("#connexionForm").submit( function() {							 
		$.ajax({
		   type: "POST",
		   url: "Controleur/connexion.php",
		   data: "login="+$("#login").val()+"&pass="+$("#pass").val(),
		   success: function(msg){
				console.log(msg);
				if(msg==1) // si la connexion en php a fonctionnée
				{
					$("div#connexion").html("<span id=\"confirmMsg\">Vous &ecirc;tes maintenant connect&eacute;.</span>");
					// on désactive l'affichage du formulaire et on affiche un message de bienvenue à la place
				}
				else // si la connexion en php n'a pas fonctionnée
				{
					$("span#erreur").html("<span>Erreur lors de la connexion, veuillez v&eacute;rifier votre login et votre mot de passe.</span>");
					// on affiche un message d'erreur dans le span prévu à cet effet
				}
		   }
		});
		return false;
	});
});
</script>

</head>

<body>
	<div id="connexion"> <!-- bloc contenant le formulaire -->
		<form name="connexionForm" id="connexionForm" action="#"><!-- début du formulaire de connexion -->	    
			<span id="erreur"></span><!-- span qui contiendra les éventuels messages d'erreur -->
			<label for="login">Nom d'utilisateur :</label>
		    	<input type="text" name="login" id="login" /><!-- champ pour le login -->
		    	<label for="pass">Mot de passe :</label>
		    	<input type="password" name="pass" id="pass" /><!-- champ pour le mot de passe -->
		    	<input type="submit" value="Je me connecte" class="bouton" /><!-- bouton de connexion -->
	    </form><!-- fin du formulaire -->
	</div><!-- fin du bloc contenant le formulaire -->

</body>
</html>
