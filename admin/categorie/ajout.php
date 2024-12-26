<?php
session_start();
// recuperation des donnée du formul 

$nom = $_POST['nom'];
$descriptionn = $_POST['description'];
$createur = $_POST['id'];
//la chaine de connexion 

include "../../inc/function.php";
$conn = connect();

// creation du requette 
$requette = "INSERT INTO categorie (nom,description,createur) VALUES ('$nom','$descriptionn','$createur')";
 
// execution de requette 
$resultat = $conn->query($requette);
//redirection apres l'ajout a la BDD
 if($resultat){
    header('location:liste.php?ajout=ok');
 }












?>