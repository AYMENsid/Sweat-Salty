<?php
session_start();
$idproduit = $_POST['idproduit'];
$nom = $_POST['nom'];
$des=$_POST['description'];
$prix = $_POST['prix'];
include "../../inc/function.php";
$conn = connect();
//UPDATE `categorie` SET `nom` = 'ahmed' WHERE `categorie`.`id` = 22;
$requette = "UPDATE produit SET nom='$nom' ,  description='$des',prix='$prix' WHERE id='$idproduit'";
echo $requette;
$resultat = $conn->query( $requette);
if($resultat){
    header('location:liste.php?modif=ok');
}