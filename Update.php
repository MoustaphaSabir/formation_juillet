<?php
require_once('fichier_bdd.php');


$query="UPDATE famille_tbl
SET dateNaissance= '1999-02-19'
WHERE id = 20 ";

$execution=$bdd->exec($query);

