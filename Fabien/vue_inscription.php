<?php 
	include "vue/vue_entete.php";
 ?>
<html>

</div>
<div id= "corps">
        <H1>Ajout d'un nouveau participant</H1>
		</BR>
  
        <form action="index.php?section=gestioninscription" method="post" name="formInscription">
        
            <table>
            
            <tr>
            <td><label for="login"><strong>*Identifiant :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>
            </tr>
            
            <tr>
            <td><label for="pass"><strong>*Mot de passe :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>
            </tr>
            
            <tr>
            <td><label for="pass2"><strong>*Confirmez le mot de passe :</strong></label></td>
            <td><input type="password" name="pass2" id="pass2"/></td>
            </tr>
            
            <tr>
			<td><label for="nom"><strong>*Nom :</strong></label></td>
            <td><input type="text" name="nom" id="nom"/></td>
			</tr>
			
			<tr>
			<td><label for="Prenom"><strong>*Prénom :</strong></label></td>
            <td><input type="text" name="Prenom" id="Prenom"/></td>
			</tr>			
			
			<tr>
			<td><label for="Mail"><strong>*Mail:</strong></label></td>
            <td><input type="text" name="Mail" id="Mail"/></td>
			</tr>
			
            </table>
        
        <input type="button" name="register" value="S'inscrire" onClick="ValiderInscription()"/>
        
        </form>  
</div>
</body>

</html>