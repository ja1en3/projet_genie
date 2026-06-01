<?php

$serveur = "localhost";
$base = "restaurant";
$utilisateur = "root";
$motdepasse = "";

try {
    $connexion = new PDO(
        "mysql:host=$serveur;dbname=$base;charset=utf8",
        $utilisateur,
        $motdepasse
    );

    $connexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch(PDOException $e) {

    die("Erreur : " . $e->getMessage());

}

?>