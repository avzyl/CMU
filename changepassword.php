<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
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
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

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

         <div class="container mt-5  pt-5 puff-in-center bg-dark">
             <div class="row">
                 <div class="col-12">
                   <?php changeP(); ?>
                     <h1 class="text-center text-light">Change Password</h1>
                 </div>
            </div>
            <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center text-light">
                                <div class="form-group col-4">
                                 <label for = "password_current"> Enter Current Password:</label>
                                 <input type="password" class="form-control" name="password_current" id="password" value ="" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "password"> Enter New Password:</label>
                                 <input type="password" class="form-control" name="password" id="password" value ="" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "ConfirmPassword"> Confirm New Password:</label>
                                 <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="" autocomplete="off"required/>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-7">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input type="submit" value="Change password" class="form-control btn-pass" />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
             </form>
         </div>
 </body>

     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
