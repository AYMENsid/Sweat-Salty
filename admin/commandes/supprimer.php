<?php

$idcommande = $_GET['idcommande'];
include "../../inc/function.php";
$conn = connect();
$requette = "DELETE FROM commande WHERE id='$idcommande'";
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?delet=ok');
}