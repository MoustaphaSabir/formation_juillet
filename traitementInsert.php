<?php
require_once('fichier_bdd.php');
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];

$query="INSERT INTO famille_tbl(nom, prenom) VALUES('".$nom."','".$prenom."')";

$execution=$bdd->exec($query);
