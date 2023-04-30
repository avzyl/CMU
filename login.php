<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
</head>
<body>
<<<<<<< Updated upstream
        <nav class="navbar shadow-sm slide-in-left">
          <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/cmuLGO.png" height="100" class="logo d-inline-block align-top"
              alt="mdb logo"><h3 class="ib">
          </a>
        </nav>
=======
  <nav class="navbar navbar-dark bg-dark shadow-sm slide-in-left">
    <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
      <img src="resource/img/cmuLGO.png" height="100" class="logo d-inline-block align-top"
        alt="mdb logo"><h3 class="ib">
    </a>
    <a href="template.php"><i class="fas fa-home ceucolor"></i></a>
    <a href="logout.php"><i class="fas fa-right-from-bracket ceucolor"></i></a>
  </nav>
>>>>>>> Stashed changes
           <div class="container mt-5">
            <div class="row justify-content-center">
                <div class=" col-8 ">



                    <form class="sign-form text-center   p-5 shadow puff-in-center" action="" method="post" >
                    <p class="h4 mb-4 text-light">Sign in</p>
                    <?php logd();?>
                    <input type="text" id="username" class="form-control mb-4 text-light" name="username" placeholder="Enter Username" required>
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Enter Password" name ="password" required>
                    <div class="d-flex justify-content-around">
                    </div>
                    <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                    <input  type="submit"  class="btn my-4"value="Login"/>
                    </form>



        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
