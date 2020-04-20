<?php
require_once "authentification.php";
require_once "header.php";
if (isset($_POST["connexion"])) {
    if (!empty($_POST["login"]) && !empty($_POST["password"])) {

        # chemin d'accès à votre fichier JSON
        $file = 'identifiants.json';
        # mettre le contenu du fichier dans une variable
        $data = file_get_contents($file);
        #décoder le flux JSON
        $identifiants_array = json_decode($data, true);
        # accéder à l'élément approprié
        $login=null;
        $password=null;
        $erreur=null;

        for ($i=0; $i < 3; $i++) {
            if($i==0){
                for ($j=0; $j <count($identifiants_array["admin"]) ; $j++) { 
                    if($identifiants_array["admin"][$j]["login"]==$_POST["login"] && $identifiants_array["admin"][$j]["motdepasse"]==$_POST["password"]){
                        session_start();
                        $_SESSION["connecte"]=1;
                        $_SESSION["nom"]=$identifiants_array["admin"][$j]["nom"];
                        $_SESSION["prenom"]=$identifiants_array["admin"][$j]["prenom"];
                        header('location: admin.php');
                        exit();
                    }
                }
            }
            if($i==1){
                for ($j=0; $j < count($identifiants_array["users"]); $j++) { 
                    if($identifiants_array["users"][$j]["login"]==$_POST["login"] && $identifiants_array["users"][$j]["motdepasse"]==$_POST["password"]){
                        session_start();
                        $_SESSION["connecte"]=1;
                        $_SESSION["nom"]=$identifiants_array["users"][$j]["nom"];
                        $_SESSION["prenom"]=$identifiants_array["users"][$j]["prenom"];
                        header('location: accueil.php');
                        exit();
                    }
                }
            }
            if($i==3) {
                $erreur="Identifiants incorrects";
            }
        }

        $close_file=json_encode($identifiants_array);
        file_put_contents('identifiants.json',$close_file);
    }
}

?>
<div class="container">

    <div id="connexion">
        <div class="login_header">
            <h1>Login form</h1>
            <a><img id="btn_fermer" src="img/btn_fermer.png" title="fermer" alt="fermer"></a>
        </div>
        <div class="login_container">
            <form id="form_connexion" action="" method="post">
            <pre><?php if (isset($erreur)) { echo $erreur;}  ?></pre>
                <div>
                    
                    <input type="text" name="login" value="<?php if (isset($_POST["login"])) {
    echo $_POST["login"];
}?>" placeholder="Login">
                    <img class="glyph-icones" src="img/user_login.png" alt="user_image">
                </div>
                <div>
                    <input type="password" name="password" value="<?php if (isset($_POST["password"])) {
    echo $_POST["password"];
}?>" placeholder="mot de passe">
                    <img class="glyph-icones" src="img/password.png" alt="user_password">
                </div>
                <div id="seconnecter">
                    <button type="submit" name="connexion"><p>Connexion</p></button>
                </div>
                <div id="inscription">
                    <a href=""><button><p>S'inscrire pour jouer ?</p></button></a>
                </div>
            </form>
        </div>
    </div>
</div>
