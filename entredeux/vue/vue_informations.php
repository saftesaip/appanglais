<H1>Informations du compte</H1>
<form action="index.php?section=gestioninscription" method="post" name="formInscription">
        
    <table>
		<tr>
            Identifiant :</strong></label></td>
            <td><input type="text" name="login" id="login" value="<?php echo($adh['nomUtil']); ?>" /></td>
        </tr><tr>
			<td><label for="nom"><strong>Nom :</strong></label></td>
            <td><input type="text" name="nom" id="nom"/></td>
		</tr><tr>
			<td><label for="Prenom"><strong>Prénom :</strong></label></td>
            <td><input type="text" name="Prenom" id="Prenom"/></td>
		</tr><tr>
			<td><label for="Adresse"><strong>Adresse :</strong></label></td>
            <td><input type="text" name="Adresse" id="Adresse"/></td>
		</tr><tr>
			<td><label for="Ville"><strong>Ville :</strong></label></td>
            <td><input type="text" name="Ville" id="Ville"/></td>
		</tr><tr>
			<td><label for="CP"><strong>Code postal :</strong></label></td>
            <td><input type="text" name="CP" id="CP"/></td>
		</tr><tr>
			<td><label for="Telephone"><strong>Téléphone :</strong></label></td>
            <td><input type="text" name="Telephone" id="Telephone"/></td>
		</tr><tr>
			<td><label for="TelMob"><strong>Téléphone mobile :</strong></label></td>
            <td><input type="text" name="TelMob" id="TelMob"/></td>
		</tr><tr>
			<td><label for="Mail"><strong>Mail:</strong></label></td>
            <td><input type="text" name="Mail" id="Mail"/></td>
		</tr>
	</table>
    
	<input type="button" name="register" value="S'inscrire" onClick="ValiderInscription()"/>
        
</form>  