<?php 
session_start();
if (!$_SESSION['mdp']){
    header('location: connexion.php');
}




$bdd = new PDO('mysql:host=localhost;dbname=clinique_veterinaire_dr_vigneron;','root','');
$login_admin = $bdd->query('SELECT Login FROM administrateur');

    
    
?>




<!DOCTYPE html>
<html>
        <head>
            <title>Espace Administrateur</title>
            <meta charset="utf-8">
            <link href="../css/style.css" rel="stylesheet" type="text/css">
            <link href="connexion.php">
        </head>
    <body>
    <h1>Test Administrateur</h1>
    </body>