<?php
// require_once('fichier_bdd.php');
// $nom = $_GET['nom'];
// $prenom = $_GET['prenom'];
// $id = $_GET['id'];


// $query="UPDATE famille_tbl
// SET prenom= '$prenom', nom = '$nom'
// WHERE id = $id ";

// $execution=$bdd->exec($query);

require_once('bdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $id = intval($_POST['id']);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    // Construire la requête d'update
    $requete = "UPDATE famille_tbl SET nom = '$nom', prenom = '$prenom' WHERE id = $id";

    // Exécuter la requête
    $execution = $bdd->exec($requete);

    // Rediriger ou afficher un message de succès
    if ($execution !== false) {
        echo "Mise à jour réussie.";
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
?>
