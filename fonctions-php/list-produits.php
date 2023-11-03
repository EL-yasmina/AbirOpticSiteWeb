<?php
    $conn = mysqli_connect("localhost","root","","abiroptic");

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête SQL pour sélectionner tous les produits
    $sql = "SELECT * FROM produit ORDER BY solde desc";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imageData = $row['image'];
            $imageBase64 = base64_encode($imageData);

            $html =  
            '<div class="box">
                <div class="image">
                    <div class="icons">
                        <a href="?ajouterAuPanier=' .$row['id']. '" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $row['nom'] . '">
                </div>
                <div class="content">
                    <h3>' . $row['nom'] . '</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>';
            
            if ($row['solde'] > 0) {
                $html .= '<div class="price">' . sprintf("%.02f", ($row['prix'] - (  ($row['solde'] * $row['prix'] )/100   )))  . ' dh <span>' . $row['prix'] . ' dh</span></div>';
            } else {
                $html .= '<div class="price">' . $row['prix'] . ' dh </div>';
            }
            
            $html .= '</div> 
            </div>';


            echo $html;

            

        }
    } else {
        echo "Aucun produit trouvé dans la base de données.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
?>