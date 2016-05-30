<?php 
	include "vue/vue_entete.php";
 ?>
<html>

</div>
<div id= "corps">
        <H1>Création d'un nouveau compte utilisateur</H1>
		</BR>
<?php
//if ($bad==1)
//{
//	echo"<H2>Le login est deja utilisé</H2>";
//}
?>
  
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
			<td><label for="Adresse"><strong>*Adresse :</strong></label></td>
            <td><input type="text" name="Adresse" id="Adresse"/></td>
			</tr>
			
			<tr>
			<td><label for="Ville"><strong>*Ville :</strong></label></td>
            <td><input type="text" name="Ville" id="Ville"/></td>
			</tr>
			
			<tr>
			<td><label for="CP"><strong>*Code postal :</strong></label></td>
            <td><input type="text" name="CP" id="CP"/></td>
			</tr>
			
			<tr>
			<td><label for="Telephone"><strong>*Téléphone :</strong></label></td>
            <td><input type="text" name="Telephone" id="Telephone"/></td>
			</tr>
			
			<tr>
			<td><label for="TelMob"><strong>Téléphone mobile :</strong></label></td>
            <td><input type="text" name="TelMob" id="TelMob"/></td>
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