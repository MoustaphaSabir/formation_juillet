<?php
$bdd = new PDO('mysql:host=localhost;dbname=formation_bdd_juillet;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$nom='nom de la course';
$lieu='lieu de la course';
$query="INSERT INTO famille_tbl(Nom, Lieu) VALUES('".$nom."','".$lieu."')";

$execution=$bdd->exec($query);

?>