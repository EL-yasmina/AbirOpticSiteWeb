<?php




class BaseDeDonnees { // c un type c pas un objet 
    
    protected $db; //proprieté (comme une variable global)
    
    protected function connexionDb() {
        $this->db = mysqli_connect("sql11.freesqldatabase.com","sql11667198","cdSPCALtRD","sql11667198");
    }
    
    protected function fermerDb() {
        //var
        $this->db->close();
    }
    
}
?>



