<?php
    class Produit {
        public $id;
        public $nom;
        public $quantite;
        public $image;
        public $solde;
        public $prix;
        public function __construct($id, $nom, $quantite, $image, $solde, $prix) {
            $this->id = $id;
            $this->nom = $nom;
            $this->quantite = $quantite;
            $this->image = $image;
            $this->solde = $solde;
            $this->prix = $prix;
        }
    }
?>