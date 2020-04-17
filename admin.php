<?php
session_start();
require_once "header.php";
?>
<div id="container-admin">
    <div id="admin_header">
        <div id="admin_slogan">
            <h1>CREER ET PARAMETRER VOS QUIZZS</h1>
        </div>
        <div id="btn_deconnexion">
            <button>
                <a href="deconnexion.php">Déconnexion</a>
            </button>
        </div>
    </div>
    <div id="zone_admin">

        <div id="admin_menu">
            <div id="zone_avatar">
                
            </div>

            <div id="menu">
                <ul>
                    <li>
                        <a href="#">Liste Questions
                            <div class="glyphicon">
                                <img alt="liste questions" title="liste questions" src="img/ic-liste-active.png">
                            </div>
                        </a>
                    </li>
                    <li>
                    <a href="#">Créer Admin
                            <div class="glyphicon">
                                <img alt="liste questions" title="liste questions" src="img/ic-ajout.png">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">Liste Joueurs
                            <div class="glyphicon">
                                <img alt="liste questions" title="liste questions" src="img/ic-liste.png">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">Créer question
                            <div class="glyphicon">
                                <img alt="liste questions" title="liste questions" src="img/ic-login.png">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div id="zone_questionnaire">
            <h1>Nombre de questions/jeu</h1>
            <textarea>5</textarea>
            <button>OK</button>
            <div id="liste_question">
                <form>
                    <label>1 Les langages de programmation</label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">HTML </label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">JAVA</label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">R </label><br>

                    <label>1 Les langages de programmation</label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">HTML </label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">JAVA</label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">R </label><br>

                    <label>1 Les langages de programmation</label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">HTML </label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">JAVA</label><br>
                    <input type="checkbox" name="html" value="HTML">
                    <label for="html">R </label><br>
                </form>
            </div>
        </div>
    </div>
</div>



