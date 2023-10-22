<?php
        // Vérifiez si le produit a été ajouté au panier
        if (isset($_GET['ajouterAuPanier'])) {
            // Récupérez les détails du produit (remplacez ces valeurs par les données réelles du produit)
            $idProduit = $_GET['ajouterAuPanier'];
            if (!isset($_SESSION['panier'])) {
                $_SESSION['panier'] = array();
            }

            // Vérifiez si le produit est déjà dans le panier
            $produitExiste = false;
            foreach ($_SESSION['panier'] as $key => $produit) {
                if ($produit['id'] == $idProduit) {
                    // Le produit est déjà dans le panier, mettez à jour la quantité
                    $_SESSION['panier'][$key]['quantite'] += 1;
                    $produitExiste = true;
                    break;
                }
            }

            // Si le produit n'existe pas encore dans le panier, ajoutez-le
            if (!$produitExiste) {
                $produit = array(
                    'id' => $idProduit,
                    'quantite' => 1
                    // D'autres informations du produit si nécessaire
                );
                    $_SESSION['panier'][] = $produit;
            }
        }



    ?>