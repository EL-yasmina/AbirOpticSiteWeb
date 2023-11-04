<?php

class BaseDeDonnees {
    
    protected $db;
  
    protected function connexionDb() {
        $this->db = mysqli_connect("localhost","root","","abiroptic");
    }
    
    protected function fermerDb(){
        $this->db->close();
    }
    
}
?>