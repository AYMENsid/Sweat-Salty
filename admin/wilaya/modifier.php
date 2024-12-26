<?php
session_start();
$idwilaya = $_POST['idwilaya'];
$wilaya = $_POST['nomwilaya'];
$livraison=$_POST['livraison'];

include "../../inc/function.php";
$conn = connect();
//UPDATE `categorie` SET `nom` = 'ahmed' WHERE `categorie`.`id` = 22;
$requette = "UPDATE wilayatna SET wilaya='$wilaya' ,  livraison='$livraison' WHERE id='$idwilaya'";
echo $requette;
$resultat = $conn->query( $requette);
if($resultat){
    header('location:liste.php?modif=ok');
}