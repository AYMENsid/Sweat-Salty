<?php
session_start();
include "../../inc/function.php";
$categorie=getAllcategorie();
$produit = getAllproduct();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Liste des produit</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Sweat & Salty</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../deco.php">deconnecter</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
      <<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
               
               <li class="nav-item">
                <a class="nav-link  " href="../profile_adminz.php">
                  <span data-feather="user"></span>
                  profile
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../categorie/liste.php">
                  <span data-feather="file"></span>
                  catégorie
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#">
                  <span data-feather="shopping-cart"></span>
                  Produits
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="../commandes/liste.php">
                  <span data-feather="bar-chart-2"></span>
                  Commandes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../wilaya/liste.php">
                  <span data-feather="layers"></span>
                  wilaya
                </a>
              </li>
            </ul>

            
            
              
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des produits</h1>

            
            <div>

                     <a class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"> Ajouter </a>
           
        
        </div>
            


        

          </div>
          <?php 
        if(isset($_GET['ajout']) && $_GET['ajout']=="ok"){
           print' <div class="alert alert-success" > ptoduit ajouter avec succes</div>';
        }
          ?>
          <?php 
        if(isset($_GET['delet']) && $_GET['delet']=="ok"){
           print' <div class="alert alert-danger" > produit supprimer avec succes</div>';
        }
          ?>
          <?php 
        if(isset($_GET['modif']) && $_GET['modif']=="ok"){
           print' <div class="alert alert-success" > produit modifier avec succes</div>';
        }
          ?>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody> 
    <?php
    $i = 0;
    foreach($produit as $produii){
        $i++;
        print '<tr>
<th scope="row">'.$i.'</th>
<td>'.$produii['nom'].'</td>
<td>'.$produii['description'].'</td>
<td>
  <a data-toggle="modal" data-target="#editm'.$produii['id'].'" class="btn btn-success">Modifier</a>
  <a href="supprimer.php?idcategori='.$produii['id'].' " class="btn btn-danger">Supprimer</a>
</td>
</tr>';
    }
    ?>
    
    
  </tbody>
</table>
          <?php  ?>
          <div>
          <table class="table">
  
  <tbody> 
    <?php
   
   
    ?>
    
    
  </tbody>
</table>

          </div>

          
          
        </main>
      </div>
    </div>

<!-- Modal ajouter  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ajout.php" method="POST"enctype="multipart/form-data"> <!-- multi... elajal tswira sinon matmchich-->
<div class="form-group">
  
<input type="text" name="nom" class="form-control" placeholder="entrer le nom ..">
<br>

<textarea  name="description" class="form-control"placeholder="entrer la description.."  ></textarea>
</div>
<div class="form-group">
  
<input type="number" name="prix" step="1" class="form-control" placeholder="entrer le prix ...">
<br>
<input type="file" name="image"  class="form-control" placeholder="">

</div>
<div class="form-groups">
    <select name="categorie" class="form-control " >
    <?php
    foreach($categorie as $index=>$cat){
        print '<option value="'.$cat['id'].'" >'.$cat['nom'].'</option>';
    }
?>
</select>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
     </form>
      </div>
    </div>
  </div>
</div>


<?php 
foreach($produit as $index=>$produii) { ?> <!-- modification 3la hsab chhal men categorie kayen ykono hadok les modal-->

<div class="modal fade" id="editm<?php echo $produii['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form action="modifier.php" method="POST">
          <input type="hidden" value="<?php echo $produii['id'];?>" name="idproduit"> 
<div class="form-group">
<input type="text" name="nom" class="form-control" value="<?php echo $produii['nom'];?>  " placeholder="entrer le nom du catégorie ..">
<br>
<input type="text" name="prix" class="form-control" value="<?php echo $produii['prix'];?>  " placeholder="entrer le nom du catégorie ..">
<br>
<textarea  name="description" class="form-control"placeholder="entrer la description du catégorie .."  ><?php echo $produii['description'];?></textarea>
</div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
     </form>
      </div>
    </div>
  </div>
</div>
<?php
}

?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    
  </body>
</html>