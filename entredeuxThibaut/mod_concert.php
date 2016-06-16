function get_concerts()
{
    global $bdd;
           
    $req = $bdd->prepare("select NomArt,ImageArt,HDebConcert,HFinConcert from concert,artiste where concert.IDArtiste=artiste.IDArt ");
	$req->execute();
    $concerts = $req->fetchAll();
        
    return $concerts;
	