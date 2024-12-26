<?php
session_start();
$idcommande = $_POST['idcommande'];
$etat = $_POST['etat'];

include "../../inc/function.php";
$conn = connect();
//UPDATE `categorie` SET `nom` = 'ahmed' WHERE `categorie`.`id` = 22;
$requette = "UPDATE commande SET etat='$etat'  WHERE id='$idcommande'";
echo $requette;
$resultat = $conn->query( $requette);
if($resultat){
    header('location:liste.php?modif=ok');
}