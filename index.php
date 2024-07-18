<?php
$bdd = new PDO('mysql:host=localhost;dbname=formation_bdd_juillet;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
var_dump($bdd);
// $requete='SELECT * FROM	famille_tbl'; // écriture de la requête
// $reponses = $bdd->query($requete); 
// foreach ($reponses as $reponse) {
// 	echo "Nom : ".$reponse['nom']."<br>";
// }

// $execution=$bdd->exec($query);

$requete='SELECT * FROM	famille_tbl'; // écriture de la requête
$reponses = $bdd->query($requete); 
foreach ($reponses as $reponse) {
	echo "Nom : ".$reponse['nom']."<br>";
}

$execution=$bdd->exec($query);

?>