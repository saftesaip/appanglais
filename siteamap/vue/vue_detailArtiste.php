<?php
include "vue/vue_entete.php";
echo"<div id='Corps'></BR><H1><CENTER>".$artisteChoisi['nomArt']." ".$artisteChoisi['prenomArt']."</BR><A href=".$artisteChoisi['siteArt'].">".$artisteChoisi['siteArt']."</a></BR> <A HREF=index.php?section=oeuvresArtiste&idArt=".$artisteChoisi['idArt'].">Ses Oeuvres</A> </BR>";
echo"<TABLE><TR><TD><IMG src=./vue/images/imagesArtistes/".$artisteChoisi['imageRefArt']."></TD><TD>".$artisteChoisi['description']."</TD></TR></TABLE></CENTER></H1>"
?>