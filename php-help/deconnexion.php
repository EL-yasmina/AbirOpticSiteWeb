<?php
// Démarrer la session (si elle n'est pas déjà démarrée)
session_start();

// Détruire la session
session_destroy();

// Rediriger vers la page de index
header("Location: ../index.php");
?>
