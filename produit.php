<?php
include "inc/function.php";

$categorie = getAllcategorie();
if(isset($_GET['id'])) {
    $produit = getProduitbyId($_GET['id']);
}



?>

<!doctype html>
<html lang="en">
  <head>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

<?php
include "inc/header.php";

?>

  
    <div class="row col-12" style="margin-left: 10px; margin-top: 20px;">

    <div class="card col-12 " >
       <?php echo ' <img class="card-img-top"  style="margin-top:10px;" width:="50%" src= "images/'.$produit['image'].'" alt="Card image cap">'?>
  
  <div class="card-body">
    <h2 class="card-title"> <?php echo $produit['nom']  ?> </h2>
    <!--<p class="card-text"><?php // echo $produit['description']  ?> </p>-->
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <h4> <?php echo $produit['prix']  ?> دج </h4></li>
    <br >
    <?php echo'<a href="acheter.php?id=' . $produit['id'] . '" class="btn btn-primary">طلب المنتوج</a>' ?><br>
  </ul>
 
</div>
             
          
    </div> 
    <div >
      <h1 dir="rtl" style="margin-right:10px; margin-top:15px; color:red" >   فوائد المنتوج :</h1>
       <h6 class="text" dir="rtl" style="margin-right:10px; margin-top:15px; "><?php  echo $produit['description']  ?> </h6>
     </div>
    
   <br>
     <?php
include "inc/footer.php";

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script>
      var mainimg=document.getElementById("MainImg");
       var smalling =document.getElementsByClassName("small-img");

smalling[0].onclick = function(){
       MainImg.src=smalling[0].src;
}
smalling[1].onclick = function(){
       MainImg.src=smalling[1].src;
}
smalling[2].onclick = function(){
       MainImg.src=smalling[2].src;
}
smalling[3].onclick = function(){
       MainImg.src=smalling[3].src;
}
 </script>
</body>
</html>