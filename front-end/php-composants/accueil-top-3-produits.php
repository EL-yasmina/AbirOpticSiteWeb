<?php
    $conn = mysqli_connect("localhost","root","","abiroptic");

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête SQL pour sélectionner tous les produits
    $sql = "SELECT * FROM produit ORDER BY solde DESC LIMIT 3;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imageData = $row['image'];
            $imageBase64 = base64_encode($imageData);
            $html = '
            <div class="box">
                <div class="solde">Solde '. sprintf("%d", $row['solde']) .'%</div>
                <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $row['nom'] . '">
                <div class="content">
                    <a href="produits.php" class="btn acheter-maintenant margin-top-80">Acheter maintenant</a>
                </div>
            </div>';
            echo $html;
        }
    } else {
        echo "Aucun produit trouvé dans la base de données.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
?>