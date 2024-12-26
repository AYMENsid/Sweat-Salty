<?php

$idproduit = $_GET['idcategori'];
include "../../inc/function.php";
$conn = connect();
$requette = "DELETE FROM produit WHERE id='$idproduit'";
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?delet=ok');
}