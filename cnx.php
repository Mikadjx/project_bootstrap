
<!--Connexion entre PHP et BDD mySQL -->

<?php
$user="root";
$mdp="";
$db="form";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$db);

?>