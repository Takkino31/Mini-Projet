<?php
require_once "header.php";
require_once "fonctions/verification-inscription.php";

# chemin d'accès à votre fichier JSON
$file = 'identifiants.json';
# mettre le contenu du fichier dans une variable
$data = file_get_contents($file);
#décoder le flux JSON
$identifiants_array = json_decode($data, true);

if (isset($_POST["creer_compte"])) {
    if ($error_nom==0 && $error_prenom==0 && $error_login==0 && $error_pwd==0 && $error_pwd_bis==0 && $error_avatar==0) {
        $taille_user=count($identifiants_array["users"]);
        $identifiants_array["users"][$taille_user]["nom"]=$_POST["nom"];
        $identifiants_array["users"][$taille_user]["prenom"]=$_POST["prenom"];
        $identifiants_array["users"][$taille_user]["login"]=$_POST["login"];
        $identifiants_array["users"][$taille_user]["motdepasse"]=$_POST["mdp"];
        $close_file=json_encode($identifiants_array);
        file_put_contents('identifiants.json',$close_file);
        header('location : accueil.php');
    }
}

?>
<div id="container-inscription">
    <h1>S'INSCRIRE</h1>
    <p>Pour tester votre niveau de culture générale</p>
    <form method="post" id="form-inscription">

        <label class="form-label" for="prenom">Prénom</label><br>
        <input class="form-input" type="text" error="error-prenom" name="prenom"><br>
        <div class="error-form-inscription" id="error-prenom" >
            <?php
                if (isset($_POST["prenom"])) {
                    $error_prenom=verification_input($_POST["prenom"]);
                    if ($error_prenom===1) {
                        echo "Les valeurs saisies sont incorrectes";
                    }
                }
            ?>
        </div>

        <label class="form-label" for="nom">Nom</label><br>
        <input class="form-input" type="text" error="error-nom" name="nom" ><br>
        <div class="error-form-inscription" id="error-nom">
            <?php
                
                if(isset($_POST["nom"])){
                    $error_nom=verification_input($_POST["nom"]);
                    if ($error_nom===1) {
                        echo "Les valeurs saisies sont incorrectes";
                    }
                }
            ?>
        </div>

        <label class="form-label" for="login">Login</label><br>
        <input class="form-input" type="text" error="error-login" name="login" ><br>
        <div class="error-form-inscription" id="error-login">
            <?php
                if(isset($_POST["login"])){
                    $error_login=verification_input($_POST["login"]);
                    if ($error_login===1) {
                        echo "Les valeurs saisies sont incorrectes";
                    }
                }
            ?>
        </div>

        <label class="form-label" for="mdp">mot de passe </label><br>
        <input class="form-input" type="text" error="error-mdp" name="mdp" ><br>
        <div class="error-form-inscription" id="error-mdp">
            <?php
                if(isset($_POST["mdp"])){
                    $error_pwd=verification_password($_POST["mdp"]);
                    if ($error_pwd===1) {
                        echo "Le mdp doit contenir au moins 8 caractères";
                    }
                }
            ?>
        </div>

        <label class="form-label" for="mdp_bis">confirmer mot de passe</label><br>
        <input class="form-input" type="text" error="error-confirm-pwd" name="mdp_bis" ><br>
        <div class="error-form-inscription" id="error-confirm-pwd">
                <?php
                if (isset($_POST["mdp_bis"])) {
                    $error_pwd_bis=verification_password_confirmation($_POST["mdp"], $_POST["mdp_bis"]);
                    if ($error_pwd_bis===1) {
                        echo "Le mdp doit contenir au moins 8 caractères";
                    }
                }
                ?>
        </div>

        <div id="avatar">Avatar</div><input type="file" id="ajout-avatar" name="avatar"><br>
        <div class="error-form-inscription" id="error-confirm-pwd">
                <?php if (isset($_POST["mdp_bis"])) {
                    $error_avatar=verification_avatar($_POST["avatar"]);
                    if ($error_avatar===1) {
                        echo "Veuillez ajoutez votre photo de profil en format png ou jpeg";
                    }
                }?>
        </div>
        <input id="add-user" type="submit" value="Créer compte" name="creer_compte">
    </form>
</div>

<script>

const inputs = document.getElementsByTagName("input");
for (input of inputs) {
    input.addEventListener("keyUp",function(e){
        if(e.target.hasAttribute("error")){
            var idDivError=input.getAttribute("error");
            document.getElementById(idDivError).innerText=""
        }
        
    })
}

document.getElementById("form-inscription").addEventListener("submit",function(e){

    const inputs = document.getElementsByTagName("input");
    var error=false;
    for (input of inputs) {
            if(input.hasAttribute("error")){
               var idDivError=input.getAttribute("error");
                    if(!input.value){
                        document.getElementById(idDivError).innerText="Ce champ est obligatoire";
                    }
                error=true;
            }
            if(error){
                e.preventDefault();
                return false;
            }
    }
})
</script>
