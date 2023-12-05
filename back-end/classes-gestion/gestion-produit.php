<?php
    class GestionProduit extends BaseDeDonnees {

        public function selectAvecId($id) {
            $this->connexionDb();
            $sql = "SELECT * FROM produit WHERE id = ?";

            $statement = $this->db->prepare($sql);
            $statement->bind_param("i", $id);

            $statement->execute();
        
            $produit = null;
            $result = $statement->get_result();
            
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $produit = $this->convertToProduit($data);
            }
        
            $this->fermerDb();
            return $produit;
        }

        public function selectTout() {
            $this->connexionDb();
            $query = "SELECT * FROM produit ORDER BY solde desc";
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

        public function selectTop3() {
            $this->connexionDb();
            $query = "SELECT * FROM produit ORDER BY solde DESC LIMIT 3";
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

        // public function insert($produit) {
        //     $this->connexionDb();
        //     $sql = "
        //         INSERT INTO Produit (nom, quantite, image, solde, prix)
        //         VALUES ('".$produit->nom."', ".$produit->quantite.", '".$produit->image."', 
        //         ".$produit->solde.", ".$produit->prix.");";
        //     echo $sql;
        //     $this->db->query($sql);
        //     $this->fermerDb();
        // }

        // public function update($produit, $nom, $id, $quantite) {
        //     $this->connexionDb();
        //     $query = "
        //         UPDATE Produit
        //         SET nom = '".$nom."', quantite = ".$produit->quantite.",  
        //         solde = ".$produit->solde.", prix = ".$produit->prix."
        //         WHERE id = " . $id;
        //     // /*$query = "
            //     UPDATE Produit
            //     SET nom = 'FAtiha', quantite = 120,  
            //     solde = 00, prix = 12.99
            //     WHERE id = 4";*/
        //     $this->db->query($query);
        //     $this->fermerDb();
        // }

        private function convertToProduit($data) {
            $produit = new Produit($data['id'],$data['nom'],$data['quantite'],$data['image'],$data['solde'],$data['prix'],$data['description']);
            return $produit;
        }

    }
    
    /* $gp = new GestionProduit();

    // Exemple d'utilisation de la classe GestionProduit
    $p = $gp->selectAvecId(1);
    echo "Nom du produit : " . $p->nom . "<br>";

    //echo '<br/>';
    //$newProduit = new Produit(0, 'Nouveau Produit', 10, 'image.jpg', 0, 19.99);
    //$gp->insert($newProduit);
    
    echo '<br/>';
    
    $produit1 = $gp->selectAvecId(4);
    $produit1->nom = "Produit Mis à Jour";
    $produit1->quantite = 33;
    $produit1->id = 8; 

    $gp->update($produit1,"Fatiha",4,55);  

    echo "Nom du produit : " . $produit->nom . "<br>";

    echo '<br/>';
    $produits = $g->selectTout();
    foreach ($produits as $produit) {
        echo "Nom du produit : " . $produit->nom . "<br>";
    }
    */
?>
