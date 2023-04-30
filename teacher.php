<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';

$user = new User();

$servername = "127.0.0.1: 3307";
$username = "root";
$password = "";
$dbname = "cmu";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `tbl_accounts` WHERE `role` = 'TEACHER'";
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <div class="container">
          <table class="borderless">
              <thead>
                <tr>
                  <th><h1 class="text-white">Class</h1></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                      ?>

                      <tr>
                        <!-- <td><?php //echo $row["username"] ?></td> -->
                        <!-- <td><?php //echo $row["name"] ?></td> -->
                        <!-- <td><?php //echo '<img src="data:image;base64,',base64_encode.($row['dp']).'" alt="Image" style="width: 150px, height: 150px;">';?></td> -->
                        <td><?php echo listPic()?></td>
                        <td><button id='<?php echo $row["id"] ?>' class='name-btn text-white'><h3><?php echo $row["name"]?></h3></button></td>
                      </tr>
                <?php
                    }
                  // } else {
                  //   echo "0 results";
                  // }

                  mysqli_close($conn);
                  ?>
                </tbody>
              </table>
            </div>
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    Modal body..
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

    <script>
      $(document).ready(function(){
          $('button').click(function(){
        id_emp = $(this).attr('id')
              $.ajax({url: "select.php",
              method:'post',
              data:{emp_id:id_emp},
               success: function(result){
          $(".modal-body").html(result);
        }});


              $('#myModal').modal("show");
          })
      })
    </script>

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
</html>
