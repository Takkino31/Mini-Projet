<?php

function is_connected(){
    if (session_status()=== PHP_SESSION_NONE ) {
        session_start();
    }
    return !empty($_SESSION["connecte"]);
}

function forcer_utilisateur_connecter(){
    if (!is_connected()) {
        header('location: /connexion.php');
        exit();
    }
}

?>