<?php require_once "header.php"; ?>
<div class="container">

    <div id="connexion">
        <div class="login_header">
            <h1>Login form</h1>
            <a><img id="btn_fermer" src="img/btn_fermer.png" title="fermer" alt="fermer"></a>
        </div>
        <div class="login_container">
            <form id="form_connexion" action="" method="post">
                <div>
                    <input type="text" placeholder="Login">
                    <img class="glyph-icones" src="img/user_login.png" alt="user_image">
                </div>
                <div>
                    <input type="password" placeholder="mot de passe">
                    <img class="glyph-icones" src="img/password.png" alt="user_password">
                </div>
                <div id="seconnecter">
                    <button type="submit"><p>Connexion</p></button>
                </div>
                <div id="inscription">
                    <a href=""><button><p>S'inscrire pour jouer ?</p></button></a>
                </div>
            </form>
        </div>
    </div>
</div>
