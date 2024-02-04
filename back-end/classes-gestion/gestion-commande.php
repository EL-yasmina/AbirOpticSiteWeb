<?php
    class GestionCommande extends BaseDeDonnees {

        public function selectTout() {
            $this->connexionDb();
            $query = "SELECT * FROM commande ORDER BY date DESC";

            $statement = $this->db->prepare($query);
            $statement->execute();

            $result = $statement->get_result();
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
        public function selectTop9() {
            $this->connexionDb();
            $query = "SELECT commande.id, commande.date, commande.quantite, commande.statut, produit.nom AS nomProduit, client.nom AS nomClient FROM commande INNER JOIN client ON client.id = commande.id_client INNER JOIN produit ON produit.id = commande.id_produit ORDER BY commande.id DESC LIMIT 9";
        
            $statement = $this->db->prepare($query);
            $statement->execute();
        
            $result = $statement->get_result();
        
            // Utilisez fetch_all pour récupérer tous les résultats sous forme de tableau d'objets
            $data = $result->fetch_all(MYSQLI_ASSOC);
        
            $this->fermerDb();
        
            return $data;
        }
        

        public function selectAvecId($id) {
            $this->connexionDb();
            $sql = "SELECT * FROM commande WHERE id = ?";

            $statement = $this->db->prepare($sql);
            $statement->bind_param("i", $id); //lie le paramètre de l'id à la requete preparée

            $statement->execute();

            $result = $statement->get_result();
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
            $sql = "SELECT * FROM commande WHERE id_client = ? ORDER BY date desc, statut";

            $statement = $this->db->prepare($sql);
            $statement->bind_param("i", $idClient);

            $statement->execute();

            $result = $statement->get_result();
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
            $sql = "
                INSERT INTO commande (date, id_produit, id_client, quantite, statut)
                VALUES (CURRENT_DATE(), ?, ?, ?, ?)";

            $statement = $this->db->prepare($sql);
            $statement->bind_param("iiis", $commande->id_produit, $commande->id_client, $commande->quantite, $commande->statut);  
            
            $statement->execute();
            
            $this->fermerDb();
        }

        public function update(Commande $commande) {
            $this->connexionDb();
            $sql = "
                UPDATE commande
                SET date = ?, id_produit = ?, id_client = ?, quantite = ?, statut = ?
                WHERE id = ?";

            $statement = $this->db->prepare($sql);
            $statement->bind_param("siiisi", $commande->date, $commande->id_produit, $commande->id_client, $commande->quantite, $commande->statut, $commande->id); //"siiisi" indiquent les types de données respectifs (chaîne, entier, entier, entier, chaîne, entier) dans la méthode bind_param(). 
            $statement->execute();        
            
            $this->fermerDb();
        }

        private function convertToCommande($data) {
            return new Commande(
                $data['date'],
                $data['id_produit'],
                $data['id_client'],
                $data['quantite'],
                $data['statut']
            );
        }
    }
?>
