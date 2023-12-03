<?php    
    $gestionProduit = new GestionProduit();
    $produits = $gestionProduit->selectTop3();
    if (count($produits) > 0) {
        foreach ($produits as $produit) {
            $imageData = $produit->image;
            $imageBase64 = base64_encode($imageData);
            $html = '
            <div class="box">
                <div class="solde">Solde '. sprintf("%d", $produit->solde) .'%</div>
                <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $produit->nom . '">
                <div class="content">
                    <a href="produits.php" class="btn acheter-maintenant margin-top-80">Acheter maintenant</a>
                </div>
            </div>';
            echo $html;
        }
    } else {
        echo "Aucun produit trouvé dans la base de données.";
    }
?>