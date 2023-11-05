<?php
    include('../../back-end/classes-tables/commande.php');
    include('base-de-donnees.php');

    class GestionCommande extends BaseDeDonnees {

        public function selectAvecId($id) {
            $this->connexionDb();
            $sql = "SELECT * FROM commande WHERE id = " . $id;
            $result = $this->db->query($sql);
            $commande = null;
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $commande = $this->convertToCommande($data);
            }
            $this->fermerDb();
            return $commande;
        }

        public function selectParClient($idClient) {
            $this->connexionDb();
            $sql = "SELECT * FROM commande WHERE id_client = " . $idClient;
            $result = $this->db->query($sql);
            $commandes = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $commande = $this->convertToCommande($row);
                    $commandes[] = $commande;
                }
            }
            $this->fermerDb();
            return $commandes;
        }

        public function insert(Commande $commande) {
            $this->connexionDb();
            $query = "
                INSERT INTO commande (date, id_produit, id_client, quantite, status)
                VALUES (CURRENT_DATE(), ".$commande->id_produit.", ".$commande->id_client.", 
                ".$commande->quantite.", '".$commande->status."');";
                    
            $this->db->query($query);
            $this->fermerDb();
        }

        public function update(Commande $commande) {
            $this->connexionDb();
            $query = "
                UPDATE commande
                SET date = '".$commande->date."', id_produit = ".$commande->id_produit.", id_client = ".$commande->id_client.", 
                quantite = ".$commande->quantite.", status = ".$commande->status."
                WHERE id = " . $commande->id;
                
            $this->db->query($query);
            $this->fermerDb();
        }

        private function convertToCommande($data) {
            return new Commande(
                $data['date'],
                $data['id_produit'],
                $data['id_client'],
                $data['quantite'],
                $data['status']
            );
        }
    }
?>
