<?php
 
 require_once('fichier_bdd.php');

//  $requete=$bdd->prepare("SELECT * FROM famille_tbl where prenom=:prenom");
//  $requete -> execute(["prenom" => 'paul']);

    $prenom ="paul";
   

    $requete=$bdd->prepare("SELECT * FROM famille_tbl where prenom=:prenom");
  
    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);

    $requete->debugDumpParams();
    $requete->execute();
   
    foreach ($requete as $reponse) {
        // echo "Nom : ".$reponse['nom']."<br>";
        echo "Prenom : ".$reponse['prenom']."<br>";
    }


?>