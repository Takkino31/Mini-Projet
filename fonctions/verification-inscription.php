<?php

#fonction verification input prénom, nom, login
function verification_input($input) {
    $error = 1;
    if (preg_match("/[^a-z]+/i", $input)) {
        return $error = 0;
    }
    else {
        return $error;
    }
}

#fonction verification mot de passe
function verification_password($pwd) {
    $taille = strlen($pwd);
    $error = 0;
    if ($taille >= 8) {
        return $error;
    }
    else {
        return $error = 1;
    }
}

#fonction verification confirmation mot de passe
function verification_password_confirmation($pwd, $pwdbis) {
    $error = 0;
    if ($pwd !== $pwdbis) {
        $error = 1;
    }
    return $error;
}

#verification de l'avatar
function verification_avatar($nomfichier){
    $regex="/(\.jpeg`|\.png)$/i";
    $error=1;
    if (preg_match($regex , $nomfichier)) {
        return $error=0;
    }
    else{
        return $error;
    }
}

?>