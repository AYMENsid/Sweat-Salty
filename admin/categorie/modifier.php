<?php
session_start();
$idcategorie = $_POST['idcategorie'];
$nom = $_POST['nom'];
$des=$_POST['description'];
include "../../inc/function.php";
$conn = connect();
//UPDATE `categorie` SET `nom` = 'ahmed' WHERE `categorie`.`id` = 22;
$requette = "UPDATE categorie SET nom='$nom' ,  description='$des' WHERE id='$idcategorie'";
echo $requette;
$resultat = $conn->query( $requette);
if($resultat){
    header('location:liste.php?modif=ok');
}