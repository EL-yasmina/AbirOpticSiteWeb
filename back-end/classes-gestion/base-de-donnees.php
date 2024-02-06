<?php




class BaseDeDonnees { // c un type c pas un objet 
    
    protected $db; //proprieté (comme une variable global)
    
    protected function connexionDb() {
        $this->db = mysqli_connect("srv1252.hstgr.io","u261538081_abir","Abir_Optic_2024","u261538081_AbirOptic");

    }
    
    protected function fermerDb() {
        //var
        $this->db->close();
    }
    
}
?>



