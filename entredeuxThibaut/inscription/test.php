

<form method="post">
<label>Pseudo: <input type="text" name="pseudo"/></label><br/>
<label>Mot de passe: <input type="password" name="passe"/></label><br/>
<label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>
<label>Adresse e-mail: <input type="text" name="email"/></label><br/>
<input type="submit" value="M'inscrire"/>
</form>

<?php
if(!empty($_POST['pseudo']))
{
// D'abord, je me connecte à la base de données.
mysql_connect("localhost", "root", "");
mysql_select_db("nom_db");

// Je mets aussi certaines sécurités ici…
$passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2']));
if($passe == $passe2)
{
$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
// Je vais crypter le mot de passe.
$passe = sha1($passe);

mysql_query("INSERT INTO validation VALUES('', '$pseudo', '$passe', '$email')");
}
 
else
{
echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
}
}
?>

