<?php

include "cnx.php";

/* Instruction avec fonction isset permettant de valider la variable */ 

if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["subject1"]) && isset($_POST["mail"]) && isset($_POST["message1"]) )



/* Affecte la saisie de l'utilisateur à une variable */

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $subject = $_POST["subject1"];
    $mail = $_POST["mail"];
    $message1 = $_POST["message1"];
    

/*Requête effectuer pour ajouter une nouvelle ligne à la table "user" */

    $req=mysqli_query($link, "INSERT INTO user(nom, prenom, mail) VALUES ('$nom','$prenom','$mail')");

    if (isset($_POST['message1'])) {

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From:  <chezdijoux@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


$message = '<h1>Message envoyé depuis la page Contact de project_bootstrap</h1>
        <p><b>Email : </b>' . $_POST['mail'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message1']) . '</p>';



    $retour = mail('chezdijoux@gmail.com','envoi depuis la page contact',$message1,$headers);
if($retour)

    echo '<p>Votre message a bien été envoyé.<p>';
}

?>