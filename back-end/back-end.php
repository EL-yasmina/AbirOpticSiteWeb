
<?php    
    define('ROOT_PATH', realpath(dirname(__FILE__)));
    include(ROOT_PATH . '/classes-tables/commande.php');
    include(ROOT_PATH . '/classes-tables/produit.php');
    include(ROOT_PATH . '/classes-tables/client.php');
    
    include(ROOT_PATH . '/classes-gestion/base-de-donnees.php');
    include(ROOT_PATH . '/classes-gestion/gestion-commande.php');
    include(ROOT_PATH . '/classes-gestion/gestion-produit.php');
    include(ROOT_PATH . '/classes-gestion/gestion-client.php');
?>