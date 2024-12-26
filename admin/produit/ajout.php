<?php

// recuperation des donnée du formul 

$nom = $_POST['nom'];
$descriptionn = $_POST['description'];
$prix = $_POST['prix'];
$categorie = $_POST['categorie'];

$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image = $_FILES["image"]["name"];
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  session_start();

//la chaine de connexion 

include "../../inc/function.php";
$conn = connect();

// creation du requette 
$requette = "INSERT INTO produit (nom,description,prix,image,categorie) VALUES ('$nom','$descriptionn','$prix','$image','$categorie')";
 
// execution de requette 
$resultat = $conn->query($requette);
//redirection apres l'ajout a la BDD
 if($resultat){
    header('location:liste.php?ajout=ok');
 }

