<?php
include "inc/function.php";
$commandepasser = 0;

$categorie = getAllcategorie();
$wilaya = getAllwilaya();
if(isset($_GET['id'])) {
    $produit = getProduitbyId($_GET['id']);
}
if(!empty($_POST)){
  if(Addcommande($_POST)){
    $commandepasser = 1;
  };
}



?>

<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

<?php
include "inc/header.php";

?>

  
<form class=" ml-8"  style="margin-left:50px;margin-right:50px" method="POST">
<input class="form-group"type="hidden" value="Pas traité" name="etat"> 
<br>

  <div class="form-row" dir="rtl">
  <label for="text" dir="rtl">اسم المنتوج</label>
      <select id="inputState"  class="form-control col-md-4"dir="rtl"  name="prod"dir="rtl">
      
        <?php 
        
              print '<option>'.$produit['nom'].'</option> ';
               
?>
 </select>
    <div class="form-group col-md-4"dir="rtl" >
      <label for="text">الاسم الكامل </label>
      <input type="text" name="nom" class="form-control" id="inputPassword4" placeholder="اكتب هنا الاسم">
    </div>
    
  </div>
  <div class="form-group col-md-4"dir="rtl">
    <label for="inputAddress">رقم الهاتف </label>
    <input type="text" name="num" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group col-md-4"dir="rtl">
      <label for="inputState">الولاية</label>

      

      <select id="inputState" class="form-control col-md-4" name="wilaya"dir="rtl" > 
        <option selected>اختر ولايتك        &#x23F7;</option>
        <?php 
        foreach($wilaya as $categorie){
              print '<option>'.$categorie['wilaya'].'</option> ';
               }
        
?>
 </select>
    </div>
  <div class="form-group"dir="rtl">
    <label for="inputAddress2" >البلدية</label>
    <input type="text" name="commune" class="form-control" id="commune" placeholder="اكتب البلدية الساكن فيها">
  </div>
  <div class="form-row">
    
  </div>
  <div class="form-group">
    <br>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:20px">اطلب الان</button>
</form>
   
<?php
include "inc/footer.php";

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      
    </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.js"></script>
 <?php
  if($commandepasser==1){
   print "<script> 
     Swal.fire(
    'Good job!',
    'You clicked the button!',
     'success'
)   </script>";
 } ?>
</body>
</html>