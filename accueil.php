<?php
session_start();
echo "<h1>Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom']." dans la page d'accueil</h1>" ;
?>
<br><br><br><br><br>
<a href="deconnexion.php>Se deconnecter</a>


