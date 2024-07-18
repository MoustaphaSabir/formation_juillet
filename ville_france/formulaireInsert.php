<?php
//    $bdd = new PDO('mysql:host=localhost;dbname=formation_bdd_juillet;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
// $ville = $_GET['ville_nom'];
// $ville_departement = $_GET['ville_departement'];



// $query="INSERT INTO villes_france_free(ville_nom, ville_departement,) VALUES('".$ville."','".$ville_departement."')";


// $execution=$bdd->exec($query);


try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=formation_bdd_juillet;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // Récupération des paramètres GET en toute sécurité
    $ville = $_GET['ville_nom'];
    $ville_departement = $_GET['ville_departement'];
    $ville_code_commune = $_GET['ville_code_commune'];

    // Préparation de la requête SQL
    $query = $bdd->prepare("INSERT INTO villes_france_free (ville_nom, ville_departement,ville_code_commune) VALUES (:ville_nom, :ville_departement,:ville_code_commune)");

    // Exécution de la requête en liant les paramètres
    $execution = $query->execute(array(
        'ville_nom' => $ville,
        'ville_departement' => $ville_departement,
        'ville_code_commune' => $ville_code_commune,
    ));

    if ($execution) {
        echo "Insertion réussie.";
    } else {
        echo "Erreur lors de l'insertion.";
    }
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

