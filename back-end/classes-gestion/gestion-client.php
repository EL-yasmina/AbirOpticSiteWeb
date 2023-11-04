<?php
    include('../classes-tables/client.php');
    include('base-de-donnees.php');

    class GestionClient extends BaseDeDonnees {
    
        public function selectAvecEmailEtPassword($email, $password) {
            $this->connexionDb();
            $sql = "SELECT * FROM client WHERE email ='" .$email. "' AND password = '".$password."'";
            $result = $this->db->query($sql);
            $client = null;
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $client = $this->convertToClient($data);
            }
            $this->fermerDb();
            return $client;
        }
        
        public function selectAvecId($id) {
            $this->connexionDb();
            $sql = "SELECT * FROM client WHERE id = ".$id;
            $result = $this->db->query($sql);
            $client = null;
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $client = $this->convertToClient($data);
            }
            $this->fermerDb();
            return $client;
        }

        public function selectTout() {
            $this->connexionDb();
            $query = "SELECT * FROM client";
            $result = $this->db->query($query);
            $clients = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $client =  $this->convertToClient($row);
                    $clients[] = $client;
                }
            }
            $this->fermerDb();
            return $clients;
        }
    
        public function insert($client) {
            $this->connexionDb();
            $query = "
                INSERT INTO Client (nom, prenom, sexe, email, telephone, adresse, ville, password)
                VALUES ('".$client->nom."', '".$client->prenom."', '".$client->sexe."', '".$client->email."', 
                '".$client->telephone."', '".$client->adresse."', '".$client->ville."', '".$client->password."');";
                
            $this->db->query($query);
            $this->fermerDb();
        }

        public function update(Client $client) {
            $this->connexionDb();
            $query = "
                UPDATE Client
                SET nom = '".$client->nom."', prenom = '".$client->prenom."', sexe = '".$client->sexe."', 
                email = '".$client->email."', telephone = '".$client->telephone."', adresse = '".$client->adresse."', 
                ville = '".$client->ville."', password = '".$client->password."'
                WHERE id = " . $client->id;
            
            $this->db->query($query);
            $this->fermerDb();
        }

        private function convertToClient($data) {
            return new Client(
                $data['id'],
                $data['nom'],
                $data['prenom'],
                $data['sexe'],
                $data['email'],
                $data['telephone'],
                $data['adresse'],
                $data['ville'],
                $data['password']
            );
        }

    }    
?>

<?php
    /*
    $gestionClient = new GestionClient();
    
    echo '<br/>';
    $client = $gestionClient->selectAvecId(2);
    echo $client->nom .'<br/>';

    echo '<br/>';
    $client = $gestionClient->selectAvecEmailEtPassword('oussamax@gmail.com','123');
    echo $client->nom .'<br/>';

    //$newClient = new Client(0,'oussama','oussamax','H','oussamax@gmail.com','0637803888','Rue de chatou','Houilles','123');
    //$gestionClient->insert($newClient);
    //echo $client->nom .'<br/>';
    
    
    echo '<br/>';
    $client->nom ='el taiebi';
    $gestionClient->update($client);
    $client = $gestionClient->selectAvecEmailEtPassword('oussamax@gmail.com','123');
    echo $client->nom .'<br/>';
        
    echo '<br/>';
    $clients = $gestionClient->selectTout();
    foreach ($clients as $client) {
        echo $client->nom .'<br/>';
    }*/
?>