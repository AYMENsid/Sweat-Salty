 <?php
 session_start();

if(isset($_SESSION['nom'])) {
    //header
}
include"../inc/function.php";
 $user = true;
 $var = 1;
if(!empty($_POST)){
     $user=connectAdmin($_POST);
     if($user==false){
        print " <script> Swal.fire(
            'who are you?',
            'check you information',
            'question'
          )
    </script>";
         $var = 0;
    }
     if ($var != 0) {
         if (count($user) > 0) {
            Session_start();
            $_SESSION['id'] = $user['id'];
                     $_SESSION['email'] = $user['email'];
                    $_SESSION['nom'] = $user['nom'];
                      $_SESSION['mp'] = $user['mp'];
             

                    //header('location:profile.php');
             header('location:profile_adminz.php');
         }
     }
     
}

 
 //if(!empty($_POST)){ 
  //  header('location:deco.php');
    //       $user = connectAdmin($_POST);
      //           if(count (array($user)) > 0 ){
        
           //               Session_start();
                        //          $_SESSION['email'] = $user['email'];
                         //        $_SESSION['nom'] = $user['KO'];
                          //        $_SESSION['mp'] = $user['mp'];

                                //header('location:profile.php');
                
                          //  }
    
//}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.all.min.js">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.css">


</head>
  <body>
    <h1 class="text-center mt-4">espace Admin : connexion  </h1>
<form method="POST"  class="card col-6 offset-3" style="border:none">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="mp" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <br>

  <button type="submit" class="btn btn-primary"> connecter </button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.js"></script>
<?php

if($user==false){
    print " <script> Swal.fire(
        'who are you?',
        'check you information',
        'question'
      )
</script>";
}

?>

</body>

</html>