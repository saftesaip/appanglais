<?php
include_once('vue_entete.php');
?>
<html>
<div id='connexionAdh'>

</BR><H1>Veuillez vous connecter</H1></BR>
<FORM action='index.php?section=verifConnexion' method='POST' name='FormConnexionAdh'>
<TABLE>
<tr><td>votre login </td><td><input name='TLogin' size=20 ></td></tr>
<tr><td>votre mot de passe </td><td><input type='password' name='TMdp' size=20 ></td></tr>
<tr><th colspan=2><input type='submit' value='Valider'><input type='submit' name='inscription' value='inscription'></th></tr>
</TABLE>
</form>
</div>
</html>