<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
updateProfile();
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


 </head>
 <body>
   <section class="ud">
     <nav class="navbar navbar-dark bg-dark shadow-sm slide-in-left">
       <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
         <img src="resource/img/cmuLGO.png" height="100" class="logo d-inline-block align-top"
           alt="mdb logo"><h3 class="ib">
       </a>
       <a href="template.php"><i class="fas fa-home ceucolor"></i></a>
       <a href="logout.php"><i class="fas fa-right-from-bracket ceucolor"></i></a>
     </nav>

       <div class="container mt-5  pt-5 puff-in-center bg-dark">
         <div class="row">
           <div class="col-12">
             <h1 class="text-center text-light">Update your Information</h1>
           </div>
         </div>
         <form action="" method="post">
           <table class="table ">
             <tr>
               <td>
                 <div class="row justify-content-center">
                   <div class="form-group col-4">
                     <label for = "username" class="text-light"> Username:</label>
                     <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo escape($user->data()->username); ?>" autocomplete="off"/>
                   </div>
                   <div class="form-group col-4">
                     <label for = "fullName" class="text-light"> Full Name</label>
                     <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo escape($user->data()->name); ?>"/required>
                   </div>
                   <div class="form-group col-4">
                     <label for = "email" class="text-light"> Email Address</label>
                     <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo escape($user->data()->email); ?>"/required>
                   </div>
                 </div>
               </td>
             </tr>
             <tr>
               <td>
                 <div class="row justify-content-center">
                   <div class="form-group col-5">
                     <label for="College" class="text-light">College/s to handle</label>
                     <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                       <?php $view->collegeSP2();?>
                     </select>
                   </div>
                   <div class="form-group col-5">
                     <label  >&nbsp;</label>
                     <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                     <input type="submit" value="Update your profile" class=" form-control btn-update" href="home.php"/>
                   </div>
                 </div>
               </td>
             </tr>
           </table>
         </form>
         <form action="updatepropic.php" method="post" enctype="multipart/form-data">
           <table class="table">
             <tr>
               <td>
                 <div class="row justify-content-center">
                   <div class="form-group col-4 text-right">
                     <?php profilePic(); ?>
                   </div>
                   <div class="form-group col-6 text-light">
                     <label for="myfile">Upload your Picture</label>
                     <input id="myfile" type="file" name="myfile" class="form-control-file" />
                     <input type="submit" name="pic" value="Update your Picture" class=" mt-4  form-control btn-update" accept=".jpg" />
                   </div>
                 </div>
               </td>
             </tr>
           </table>
         </form>
       </div>
   </section>
 </body>

     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
