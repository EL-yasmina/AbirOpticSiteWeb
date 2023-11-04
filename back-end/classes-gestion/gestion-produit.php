<?php
    include('../classes-tables/produit.php');    
    include('base-de-donnees.php');
    class GestionProduit extends BaseDeDonnees {

        public function selectAvecId($id) {
            $this->connexionDb();
            $sql = "SELECT * FROM produit WHERE id = " . $id;
            $result = $this->db->query($sql);
            $produit = null;
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $produit = $this->convertToProduit($data);
            }
            $this->fermerDb();
            return $produit;
        }

        public function selectTout() {
            $this->connexionDb();
            $query = "SELECT * FROM produit";
            $result = $this->db->query($query);
            $produits = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $produit = $this->convertToProduit($row);
                    $produits[] = $produit;
                }
            }
            $this->fermerDb();
            return $produits;
        }

        public function insert($produit) {
            $this->connexionDb();
            $query = "
                INSERT INTO Produit (nom, quantite, image, solde, prix)
                VALUES ('".$produit->nom."', ".$produit->quantite.", '".$produit->image."', 
                ".$produit->solde.", ".$produit->prix.");";
            echo $query;
            $this->db->query($query);
            $this->fermerDb();
        }

        public function update(Produit $produit) {
            $this->connexionDb();
            $query = "
                UPDATE Produit
                SET nom = '".$produit->nom."', quantite = ".$produit->quantite.",  
                solde = ".$produit->solde.", prix = ".$produit->prix."
                WHERE id = " . $produit->id;

            $this->db->query($query);
            $this->fermerDb();
        }

        private function convertToProduit($data) {
            return new Produit(
                $data['id'],
                $data['nom'],
                $data['quantite'],
                $data['image'],
                $data['solde'],
                $data['prix']
            );
        }

    }
    /* 
    $gestionProduit = new GestionProduit();

    // Exemple d'utilisation de la classe GestionProduit
    $produit = $gestionProduit->selectAvecId(1);
    echo "Nom du produit : " . $produit->nom . "<br>";

    //echo '<br/>';
    //$newProduit = new Produit(0, 'Nouveau Produit', 10, 'image.jpg', 0, 19.99);
    //$gestionProduit->insert($newProduit);
    
    echo '<br/>';
    $produit = $gestionProduit->selectAvecId(1);
    $produit->nom = "Produit Mis à Jour";
    $gestionProduit->update($produit);    
    echo "Nom du produit : " . $produit->nom . "<br>";

    echo '<br/>';
    $produits = $gestionProduit->selectTout();
    foreach ($produits as $produit) {
        echo "Nom du produit : " . $produit->nom . "<br>";
    }
    */
?>
