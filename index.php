<?php
include "inc/function.php";
$categorie = getAllcategorie();
$produit = getAllproduct();
if (!empty($_POST)) {// button search clicked


  $produit = searchProduit($_POST['search']);
}
else{
  $produit = getAllproduct();
}


?>

<!doctype html>
<html lang="en">
  <head>
    
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sweet & Salty</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

<?php
include "inc/header.php";

?>

  
    <div class="row col-12" style="margin-left: 10px; margin-top: 20px;">

    <?php 
    foreach($produit as $produit ) {
      print ' <div class="row col-12" style="margin-top: 20px;margin-left: 10px;">
<div class="card" style="width: 18rem;">
<br>
  <img src="images/'.$produit['image'].'" class="card-img-top" alt="...">
  <div class="card-body"> 

   <h2 class="card-title text-center" id="nom" dir="rtl" > ' . $produit['nom'] . ' </h2>
     <h4 class="card-text text-center">' . $produit['prix'] . ' دج </h4> 
    <a href="produit.php?id=' . $produit['id'] . '" class="btn btn-primary " style="margin-left:50px;background-color:green;margin-top:10px"> <h5 class="white-text">عرض المزيد    </h5> </a>
  </div> 
</div> 
 </div>';
    }

    ?>
             
          
    </div>
   
    <br>
    <?php
include "inc/footer.php";

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</body>
</html>