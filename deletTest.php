<?php
require_once('fichier_bdd.php');


$query=" DELETE FROM famille_tbl WHERE id=16";

$execution=$bdd->exec($query);


