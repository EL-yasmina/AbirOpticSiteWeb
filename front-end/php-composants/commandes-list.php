<?php

$gestionCommande = new GestionCommande();
$gestionProduit = new GestionProduit();

$commandes = $gestionCommande->selectParClient($_SESSION['id']);
if ($commandes != null && count($commandes)) {
    $listCommandes = '';
    $dateGroupe = null;
    foreach ($commandes as $commande) {
        $produit = $gestionProduit->selectAvecId($commande->id_produit);
        
        if ($produit != null) {
            if($dateGroupe == null) {            
                $dateGroupe = $commande->date;
                $listCommandes .= ' <fieldset> <legend> Commande de '.$dateGroupe.'</legend>';
                $listCommandes .= '<div class="box-container">';
            }
            else if($dateGroupe != $commande->date) {
                $dateGroupe = $commande->date;
                $listCommandes .= '</div>';
                $listCommandes .= ' </fieldset> <fieldset> <legend> Commande de '.$commande->date.'</legend>';
                $listCommandes .= '<div class="box-container">';
            }
            $imageBase64 = base64_encode($produit->image);
            $listCommandes .= '
                <div class="box">
                    <i class="fas fa-times"></i>
                    <img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $produit->nom . '">

                    <div class="content">
                        <h3>' . $produit->nom . '</h3>
                        <form action="">
                            <span>quantity :</span>
                            <input type="number" name="" value="'.$commande->quantite.'" id="">
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
?>