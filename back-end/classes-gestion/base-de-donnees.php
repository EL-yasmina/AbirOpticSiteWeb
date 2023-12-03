<?php

class BaseDeDonnees {
    
    protected $db;
  
    protected function connexionDb() {
        $this->db = mysqli_connect("sql11.freesqldatabase.com","sql11667198","cdSPCALtRD","sql11667198");
    }
    
    protected function fermerDb(){
        $this->db->close();
    }
    
}
?>