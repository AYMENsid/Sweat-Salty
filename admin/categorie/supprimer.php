<?php

$idcategorie = $_GET['idcategori'];
include "../../inc/function.php";
$conn = connect();
$requette = "DELETE FROM categorie WHERE id='$idcategorie'";
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?delet=ok');
}