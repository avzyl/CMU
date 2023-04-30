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
  <section class="page">
    <nav class="navbar navbar-dark bg-dark shadow-sm slide-in-left">
      <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
        <img src="resource/img/cmuLGO.png" height="100" class="logo d-inline-block align-top"
        alt="mdb logo"><h3 class="ib">
        </a>
      </nav>
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

            <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom">
              <div class="container text-center">
                <div class="row">
                  <div class="col col-sm-5 text-left">
                    <small>Copyright &copy; Group 2     Class Record System 2023</small>
                  </div>
                  <div class="col text-right">
                    <small> Developers: Lyzza Abig, Leonard Julius , Al Cedrick Garcia, Joanna Policarpio, Jannah Mae Pescadera</small>
                  </div>
                </div>
              </div>
            </footer>
          </section>



        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
