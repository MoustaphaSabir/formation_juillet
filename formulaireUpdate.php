<?php
 
 require_once('fichier_bdd.php');

$id = $_GET['id'];

$query="SELECT * FROM famille_tbl WHERE id= $id";
$infos=$bdd->query($query);
$result=$infos->fetch(PDO::FETCH_ASSOC);


?>
<form action="traitementUpdate.php" method="get">
Nom :
<input type="text"  name="nom" value="<?php echo  $result["nom"] ;?>">

Prenom
<input type="text"  name="prenom" value="<?php echo  $result["prenom"] ;?>" >



<input type="hidden"  name="id" value="<?php echo  $id["nom"] ;?>"  >

Valider 
<input type="submit">
</form>