<?php

    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=formation_bdd_juillet;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // Requête SQL
    $requete = "SELECT ville_nom, ville_code_postal FROM villes_france_free limit 10";

    // Exécution de la requête
    $reponses = $bdd->query($requete);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ville</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Ville</th>
                <th>Code Postal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Affichage des résultats
            foreach ($reponses as $reponse) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($reponse['ville_nom']) . "</td>";
                echo "<td>" . htmlspecialchars($reponse['ville_code_postal']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
