
<?php
    $etatSession = session_status();

    if ($etatSession == PHP_SESSION_ACTIVE) {
        // Une session est déjà ouverte, vous pouvez accéder aux variables de session ici
    } else {
        // Aucune session n'est ouverte, vous pouvez en démarrer une si nécessaire
        session_start();
    }
?>