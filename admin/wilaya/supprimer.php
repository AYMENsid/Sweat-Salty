<?php

$idwilaya = $_GET['idwilaya'];
include "../../inc/function.php";
$conn = connect();
$requette = "DELETE FROM wilayatna WHERE id='$idwilaya'";
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?delet=ok');
}