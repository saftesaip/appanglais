<SCRIPT language="javascript">

function ValiderInscription()
{
	var ok=1;
	
	if (formInscription.login.value=="")
		{
			alert("Veuillez indiquer votre identifiant.");
			ok=0;
			formInscription.login.focus(); 
			return false;
		}
		
	if (formInscription.pass.value=="")
		{
			alert("Veuillez indiquer votre mot de passe.");
			ok=0;
			formInscription.pass.focus(); 
			return false;
		}
		
	if (formInscription.pass2.value=="")
		{
			alert("Erreur dans la saisie du mot de passe.");
			ok=0;
			formInscription.pass2.focus(); 
			return false;
		}
		
		
	if (formInscription.nom.value=="")
		{
			alert("Veuillez indiquer votre nom.");
			//variante : avoir une zone de texte à droite du nom , nommée msgnom
			//formInscription.msgnom.value = Veuillez indiquer votre nom
			ok=0;
			formInscription.nom.focus();
			//dans la variante pas de focus , ni de return false 
			return false;
		}
		
	if (formInscription.Prenom.value=="")
		{
			alert("Veuillez indiquer votre prenom.");
			ok=0;
			formInscription.Prenom.focus(); 
			return false;
		}
		
	if (formInscription.Adresse.value=="")
		{
			alert("Veuillez indiquer votre adresse.");
			ok=0;
			formInscription.Adresse.focus(); 
			return false;
		}
		
	if (formInscription.Ville.value=="")
		{
			alert("Veuillez indiquer votre ville.");
			ok=0;
			formInscription.Ville.focus(); 
			return false;
		}	
		
	if ((isNaN(formInscription.CP.value)) || (formInscription.CP.value.length!=5))
		{
			alert("Code Postal incorrect.");
			ok=0;
			formInscription.CP.focus(); 
			return false;
		}	
		
	if ((formInscription.Telephone.value=="") || (formInscription.Telephone.value.length!=10))
		{
			alert("Numéro de téléphone incorrect.");
			ok=0;
			formInscription.Telephone.focus(); 
			return false;
		}	
		
	if (formInscription.TelMob.value.length!=10)
		{
			alert("Numéro de téléphone mobile incorrect.");
			ok=0;
			formInscription.TelMob.focus(); 
			return false;
		}	
		
	if ((formInscription.Mail.value.indexOf("@",0)<0) || (formInscription.Mail.value.indexOf(".",0)<0))
		{
			alert("Mail non valide. \n Veuillez corriger");
			ok=0;
			formInscription.Mail.focus();
			return false;
		}
	
	if (ok==1)
		{
			formInscription.submit();
		}		
		
}		
</SCRIPT>
