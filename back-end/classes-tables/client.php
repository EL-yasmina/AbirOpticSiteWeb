<?php
    class Client {
        public $id;
        public $nom;
        public $prenom;
        public $sexe;
        public $email;
        public $telephone;
        public $adresse;
        public $ville;
        public $password;
        public function __construct($id, $nom, $prenom, $sexe, $email, $telephone, $adresse, $ville, $password) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->email = $email;
            $this->telephone = $telephone;
            $this->adresse = $adresse;
            $this->ville = $ville;
            // $this->password = $password;

            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }
    }
?>