<?php

$gestionCommande = new GestionCommande();
$gestionProduit = new GestionProduit();

$commandes = $gestionCommande->selectParClient($_SESSION['id']);
if ($commandes != null && count($commandes)) {
    $listCommandes = '';
    $dateGroupe = null;
    $statutGroupe = null;
    foreach ($commandes as $commande) {
        $produit = $gestionProduit->selectAvecId($commande->id_produit);
        
        if ($produit != null) {
            if($dateGroupe == null) {            
                $dateGroupe = $commande->date;
                $statutGroupe = $commande->statut;
                $listCommandes .= recupererTitreCommande($commande->statut,$dateGroupe);
                $listCommandes .= '<div class="box-container">';
            }
            else if($dateGroupe != $commande->date || $statutGroupe != $commande->statut ) {
                $dateGroupe = $commande->date;
                $statutGroupe = $commande->statut;
                $listCommandes .= '</div>';
                $listCommandes .=  ('</fieldset> ' . recupererTitreCommande($commande->statut,$dateGroupe));
                $listCommandes .= '<div class="box-container">';
            }
            $imageBase64 = base64_encode($produit->image);
            $listCommandes .= '
                <div class="box">
                    <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $produit->nom . '">

                    <div class="content">
                        <h3>' . $produit->nom . '</h3>
                        <form action="">
                            <span>quantité :</span>
                            <span>'.$commande->quantite.'</span>
                        </form>
                        <div class="price"> ' . sprintf("%.02f", ($produit->prix - (  ($produit->solde * $produit->prix )/100   ))) . ' DH <span>' . $produit->prix . ' DH</span> </div>
                    </div>
                </div>
            ';
        }
    }
    $listCommandes .= '</div> </fieldset> ';
    //$listCommandes = ' </fieldset> ';
    echo $listCommandes;
}

function recupererTitreCommande($statue, $dateGroupe) {

    if($statue == 0){
        return ' <fieldset> <legend class="statue-en-traitement"> Commande de '.$dateGroupe.' (<i>En traitement</i>)</legend>';
    }
    else if($statue == 1){
        return ' <fieldset> <legend class="statue-envoye"> Commande de '.$dateGroupe.' (<i>Envoyé</i>)</legend>';
    }
    else if($statue == 2){
        return ' <fieldset > <legend class="statue-recu"> Commande de '.$dateGroupe.' (<i>Reçu</i>)</legend>';
    }
    else if($statue == 3){
        return ' <fieldset > <legend class="statue-annuler"> Commande de '.$dateGroupe.' (<i>Annulé</i>)</legend>';
    }

    return ' <fieldset> <legend> Commande de '.$dateGroupe.'</legend>';
}
?>

