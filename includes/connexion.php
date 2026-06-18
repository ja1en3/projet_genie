<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "restaurant";

$conn = mysqli_connect(
    $serveur,
    $utilisateur,
    $motdepasse,
    $base
);

if(!$conn){
    die("Erreur de connexion");
}

?>