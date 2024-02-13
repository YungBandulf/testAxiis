<?php

$nom_serveur = "localhost";
$nom_bdd = "comptabilite";
$utilisateur ="root";
$mdp = "";

try{
    $connexion = new PDO("mysql:host$nom_serveur; dbname=$nom_bdd",$utilisateur,$mdp);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connexion;
} catch (PDOException $e) {
    die("Erreur de connexion :" . $e->getMessage());

}