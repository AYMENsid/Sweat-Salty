<?php
include "inc/function.php";
$categorie = getAllcategorie();
$produit = getAllproduct();

if (!empty($_POST)) { // button search clicked
  $produit = searchProduit($_POST['search']);
} else {
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
  </head>
  <body>
    <?php include "inc/header.php"; ?>

    <div class="container mt-4">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
    <?php foreach ($produit as $produit) : ?>
      <div class="col">
        <div class="card h-100">
          <img src="images/<?= $produit['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($produit['nom']) ?>">
          <div class="card-body d-flex flex-column">
            <h2 class="card-title text-center" dir="rtl"><?= htmlspecialchars($produit['nom']) ?></h2>
            <h4 class="card-text text-center"><?= htmlspecialchars($produit['prix']) ?> دج</h4>
            <a href="produit.php?id=<?= $produit['id'] ?>" class="btn btn-primary mt-auto" style="background-color: green;">عرض المزيد</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<br>

    <?php include "inc/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
