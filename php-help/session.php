
<?php
    $etatSession = session_status();

    if ($etatSession == PHP_SESSION_ACTIVE) {
        // Une session est déjà ouverte, accéder aux variables de session ici
    } else {
        // Aucune session n'est ouverte, en démarrer une si nécessaire
        session_start();
    }
?>