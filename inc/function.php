<?php
function connect (){
    $DBuser = 'root';
$servername = 'localhost';
$DBpassword = '';
$DBname = "test";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
    return $conn;

}
function getAllcategorie () {
    $conn = connect();
// 2 creation de requette 
$requette = "SELECT * FROM categorie";
// 3 execution de requette 
$resultat = $conn->query($requette);
// 4  resultat de requette 
$categorie = $resultat->fetchAll();
    return $categorie;


}
function getAllwilaya () {
    $conn = connect();
// 2 creation de requette 
$requette = "SELECT * FROM wilayatna";
// 3 execution de requette 
$resultat = $conn->query($requette);
// 4  resultat de requette 
$wilayto = $resultat->fetchAll();
    return $wilayto;


}
function getAllproduct() {
    $conn = connect();
// 2 creation de requette 
$requette = "SELECT * FROM produit";
// 3 execution de requette 
$resultat = $conn->query($requette);
// 4  resultat de requette 
$produit = $resultat->fetchAll();
    return $produit;
}
function getAllcommande () {
    $conn = connect();
// 2 creation de requette 
$requette = "SELECT * FROM commande";
// 3 execution de requette 
$resultat = $conn->query($requette);
// 4  resultat de requette 
$commandes = $resultat->fetchAll();
    return $commandes;

}


function searchProduit ($key){
    $conn = connect();
      // 2 creation de requette 
$requette = "SELECT * FROM produit WHERE  nom LIKE '%$key%' ";
// 3 execution de requette 
$resultat = $conn->query($requette);
// 4  resultat de requette 
$produit = $resultat->fetchAll();
    return $produit;
}
function getProduitbyId($id){
    $conn = connect();

    $requette = "SELECT * FROM produit WHERE id=$id" ;
    $resultat = $conn->query($requette);
    $produi = $resultat->fetch();
    return $produi;


}

 function Addcommande($data){
    $conn = connect();
    
    $requette = "INSERT INTO commande (nom,num,wilaya,commune,prod,etat) VALUES( '$data[nom]', '$data[num]' ,'$data[wilaya]', '$data[commune]','$data[prod]','$data[etat]')";
    $resultat = $conn->query($requette);
    if ($resultat){
        return true;
    }
    else{
        return false ; 
    }
    
}
function connectAdmin($data){
    $conn = connect();
    $email = $data['email'];
    $mp = $data['mp'];
    $requettes = "SELECT * FROM adminz WHERE email='$email' AND mp='$mp'  " ;
    $resultat = $conn->query($requettes);
    $user = $resultat->fetch();
    
    return $user ;
}

?>