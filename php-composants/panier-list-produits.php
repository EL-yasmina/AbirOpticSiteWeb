<?php

// Vérifiez si le panier existe dans la session
if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
    $listeProduits = '';

    foreach ($_SESSION['panier'] as $produitInfo) {
        $idProduit = $produitInfo['id'];
        
        $gestionProduit = new GestionProduit();
        $produit = $gestionProduit->selectAvecId($idProduit);
    
        if ($produit != null) {
            $imageBase64 = base64_encode($produit->image);
            //<i class="fas fa-times"></i>
            $listeProduits .= '
            <div class="box">
                <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $produit->nom . '">

                <div class="content">
                    <h3>' . $produit->nom . '</h3>
                    <form action="">
                        <span>quantité :</span>
                        <input type="number" name="" value="'.$produitInfo['quantite'].'" id="">
                    </form>
                    <div class="price"> ' . sprintf("%.02f", ($produit->prix - (  ($produit->solde * $produit->prix )/100   ))) . ' DH <span>' . $produit->prix . ' DH</span> </div>
                </div>
            </div>
            ';
        }
    }
    echo $listeProduits;
    }
?>