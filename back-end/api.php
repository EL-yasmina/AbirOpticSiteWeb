<?php
    include('back-end.php');
    $gestionCommmande = new GestionCommande();
    $commandes = $gestionCommmande->selectTop9();
    
    $response = array('success' => true, 'data' => $commandes);
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");    
    echo json_encode($response);// Convertissez la réponse en JSON et imprimez-la
?>
