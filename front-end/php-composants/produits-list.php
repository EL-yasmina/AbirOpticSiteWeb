<?php
    $gestionProduit = new GestionProduit();
    $produits = $gestionProduit->selectTout();
    if (count($produits) > 0) {
        foreach ($produits as $produit) {
            $imageData = $produit->image;
            $imageBase64 = base64_encode($imageData);

            $html =  
            '<div class="box">
                <div class="image">
                    <div class="icons">
                        <a href="?ajouterAuPanier=' .$produit->id. '" class="fas fa-shopping-cart"></a>
                        <a  class="fas fa-eye" onclick="voirProduit(\''.$produit->nom.'\',\''. $produit->description .'\')"></a>
                    </div>
                    <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $produit->nom . '">
                </div>
                <div class="content">
                    <h3>' . $produit->nom . '</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>';
            
            if ($produit->solde > 0) {
                $html .= '<div class="price">' . sprintf("%.02f", ($produit->prix - (  ($produit->solde * $produit->prix )/100   )))  . ' dh <span>' . $produit->prix . ' dh</span></div>';
            } else {
                $html .= '<div class="price">' . $produit->prix . ' dh </div>';
            }
            
            $html .= '</div> 
            </div>';
            echo $html;
    }
    } else {
        echo "Aucun produit trouvé dans la base de données.";
    }
?>