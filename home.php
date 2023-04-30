<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';

$user = new User();
//echo $user->data()->name;
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
   <link rel="stylesheet" type="text/css"  href="resource/css/speech.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
   <script src="https://kit.fontawesome.com/07311ba66e.js" crossorigin="anonymous"></script>


 </head>
 <body>

   <nav class="navbar navbar-dark bg-dark shadow-sm slide-in-left">
     <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
       <img src="resource/img/cmuLGO.png" height="100" class="logo d-inline-block align-top"
         alt="mdb logo"><h3 class="ib">
     </a>
     <a href="template.php"><i class="fas fa-home ceucolor"></i></a>
     <a href="logout.php"><i class="fas fa-right-from-bracket ceucolor"></i></a>
   </nav>

   <div class="container">
     <div class="row pt-5">
       <div class="col-md-4">
         <div class="card profile-card bg-dark">
           <?php profilePic(); ?>
           <h2><?php echo $user->data()->name;?></h2>
           <div class="cont">
             <h4 class="text-light"><?php echo $user->data()->role;?></h4>
             <!-- insert bio quote -->
             <h6 class="text-light"><?php echo $user->data()->colleges;?></h6>
             <div class="link">
               <a href="updateprofile.php"><i class="fa-sharp fa-solid fa-circle-user text-light"></i></a>
               <a href="changepassword.php"><i class="fa-sharp fa-solid fa-key text-light"></i></a>
             </div>
           </div>
         </div>
     </div>
       <div class="list col-md-6 bg-dark">
         <div class="row-md-6">
           <h3><?php
              echo "<br>";
              $view = new view();
              $view->getnames();
              ?></h3>

       </div>
     </div>
   </div>
 </body>
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
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
