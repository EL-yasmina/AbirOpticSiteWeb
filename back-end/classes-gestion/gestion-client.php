<?php
    class GestionClient extends BaseDeDonnees {
    
   
   
        public function selectAvecEmailEtPassword($email, $password) {
            $this->connexionDb();
            $sql = "SELECT * FROM client WHERE email = ?";
            $statement = $this->db->prepare($sql);
            $statement->bind_param("s", $email);  //"s" pour indiquer que ce sont des chaînes de caractères , bind_param() methode qui lie la valeur de l'email aux param de la requete:
            $statement->execute();

            $result = $statement->get_result();
            $client = null;

            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $hashedPasswordFromDb = $data['password'];
                
                if(password_verify($password, $hashedPasswordFromDb)){  //verification de mot de passe haché

                    $client = $this->convertToClient($data);

                }
                
            }
            $this->fermerDb();
            return $client;
        }
        
        public function selectAvecId($id) {
            $this->connexionDb();
            $sql = "SELECT * FROM client WHERE id = ?"; 

            $statement = $this->db->prepare($sql);
            $statement->bind_param("i", $id); //"i" pour indiquer que $id est un entier
            $statement->execute();

            $result = $statement->get_result();
            $client = null;

           
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();// recuperer l'element suivant
                $client = $this->convertToClient($data);
            }
            $this->fermerDb();
            return $client;
        }

        public function emailExist($email) {
            $this->connexionDb();
            $sql = "SELECT * FROM client WHERE email = ?";

            $statement = $this->db->prepare($sql);
            $statement->bind_param("s", $email);   
            $statement->execute();

            $result = $statement->get_result();

            $this->fermerDb();            
            return $result->num_rows > 0;
        } 

        public function selectTout() {
            $this->connexionDb();
            $query = "SELECT * FROM client";
            
            $statement = $this->db->prepare($query);
            $statement->execute();

            $result = $statement->get_result();
            $clients = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {   //fetch_assoc pour extraire une ligne de résultas sous forme de tableau associatif
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
                INSERT INTO client (nom, prenom, sexe, email, telephone, adresse, ville, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $hashedPassword = password_hash($client->password, PASSWORD_DEFAULT);  //hachage de mot de passe  

            $statement = $this->db->prepare($query);
            $statement-> execute([
                $client->nom,
                $client->prenom,
                $client->sexe,
                $client->email,
                $client->telephone,
                $client->adresse,
                $client->ville,
                $hashedPassword,  //ici j'ai utilisé le mot passe haché
                
            ]);
            $this->fermerDb();
        }

        public function update(Client $client) {
            $this->connexionDb();
            $query = "
                UPDATE client
                SET nom = ?, prenom = ?, sexe = ?, 
                email = ?, telephone = ?, adresse = ?, 
                ville = ?, password = ?
                WHERE id = ?" ;

            $hashedPassword = password_hash($client->password, PASSWORD_DEFAULT);

            $statement = $this->db->prepare($query);
            $statement->execute([
                $client->nom,
                $client->prenom,
                $client->sexe,
                $client->email,
                $client->telephone,
                $client->adresse,
                $client->ville,
                $hashedPassword,
                $client->id,
            ]);
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
                password_hash($data['password'], PASSWORD_DEFAULT)
                // $data['password']
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