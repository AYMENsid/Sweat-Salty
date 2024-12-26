<?php
session_start();
// recuperation des donnée du formul 

$wilaya = $_POST['wilaya'];
$livraison = $_POST['livraison'];

//la chaine de connexion 

include "../../inc/function.php";
$conn = connect();

// creation du requette 
$requette = "INSERT INTO wilayatna (wilaya,livraison) VALUES ('$wilaya','$livraison')";
 
// execution de requette 
$resultat = $conn->query($requette);
//redirection apres l'ajout a la BDD
 if($resultat){
    header('location:liste.php?ajout=ok');
 }

