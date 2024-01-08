<?php
    class Commande {
        public $date;
        public $id_produit;
        public $id_client;
        public $quantite;
        public $statut;
        public function __construct($date, $id_produit, $id_client, $quantite, $statut) {
            $this->date = $date;
            $this->id_produit = $id_produit;
            $this->id_client = $id_client;
            $this->quantite = $quantite;
            $this->statut = $statut;
        }
    }
?>
    
   