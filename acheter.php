<?php
include "inc/function.php";
$commandepasser = 0;

$categorie = getAllcategorie();
$wilaya = getAllwilaya();
if (isset($_GET['id'])) {
    $produit = getProduitbyId($_GET['id']);
}
if (!empty($_POST)) {
    if (Addcommande($_POST)) {
        $commandepasser = 1;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.css">
</head>
<body>

<?php include "inc/header.php"; ?>

<div class="container mt-5">
    <form class="needs-validation" method="POST" dir="rtl" novalidate>
        <input type="hidden" name="etat" value="Pas traité">

        <div class="row mb-3">
            <div class="col-12">
                <label for="inputProduit" class="form-label">اسم المنتوج</label>
                <select id="inputProduit" class="form-select" name="prod" required>
                    <?php echo '<option selected>' . $produit['nom'] . '</option>'; ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="inputNom" class="form-label">الاسم الكامل</label>
                <input type="text" name="nom" class="form-control" id="inputNom" placeholder="اكتب هنا الاسم" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="inputNum" class="form-label">رقم الهاتف</label>
                <input type="text" name="num" class="form-control" id="inputNum" placeholder="" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="inputWilaya" class="form-label">الولاية</label>
                <select id="inputWilaya" class="form-select" name="wilaya" required>
                    <option selected>اختر ولايتك &#x23F7;</option>
                    <?php
                    foreach ($wilaya as $categorie) {
                        echo '<option>' . $categorie['wilaya'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <label for="inputCommune" class="form-label">البلدية</label>
                <input type="text" name="commune" class="form-control" id="inputCommune" placeholder="اكتب البلدية الساكن فيها" required>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">اطلب الان</button>
            </div>
        </div>
    </form>
</div>
<br>
<?php include "inc/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.js"></script>
<?php
if ($commandepasser == 1) {
    echo "<script> 
        Swal.fire(
            'تمت العملية بنجاح!',
            'لقد أرسلت طلبك بنجاح!',
            'success'
        )
    </script>";
}
?>
</body>
</html>
