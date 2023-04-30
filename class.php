<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
updateProfile();
 ?>

 <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "cmu";

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "SELECT * FROM `tbl_accounts`";
   $result = mysqli_query($conn, $sql);
   ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="resource/css/style.css" rel="stylesheet"/>
  </head>
  <body class="nav-open">
    <section class="class">
      <nav class="navbar navbar-dark bg-dark shadow-sm slide-in-left">
        <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
          <img src="resource/img/cmuLGO.png" height="100" class="logo d-inline-block align-top"
            alt="mdb logo"><h3 class="ib">
        </a>
        <a href="logout.php"><i class="fas fa-home ceucolor"></i></a>
      </nav>

      <div class="info-sec" id="CNT-infos">
      <div class="container pt-md-5">
        <div class="row">
          <div class="nav">
            <div class="info">
              <button type="button" class="info-btn nav-close">
                <ion-icon name="close-outline" size="large"></ion-icon>
              </button>
              <div class="info-body">
                Modal body..
                </div>
            </div>
          </div>

          <main class="main">
            <div class="container">

            </div>
            <div class="pfp-S">
            </div>
            <?php
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php //echo $row["id"]?></td>
                  <td><?php //echo $row["name"]?></td>
                  <td><?php //echo $row["email"]?></td>
                  <td><?php //echo $row["colleges"]?></td>
                  <td><button id='<?php echo $row["id"]?>' type="button" onclick="toggleNav()" class="name-btn"><h4><?php echo $row["name"] ?></h4>
                  </button></td>
                  <!-- <td><button id='<?php echo $row["id"]?>' type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Show
                  </button></td> -->
                </tr>
                <?php
                // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Username: " .$row["username"]. " - Colleges: " .$row["colleges"]. " - Email: " .$row["email"];
              }
            } else {
              echo "0 results";
            }
            ?>
          </main>

          <!-- <div class="classlist col-md-4">
            <h1>Teacher</h1>
            <?php profilePic(); ?>
            <h1><?php echo $user->data()->name; ?></h1>
          </div>
          <div class="classlist col-md-8">
            <h1>Students</h1>
            <div class="pfp">
              <?php profilePic()?>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                  <h1 class="offcanvas-title" id="offcanvasRightLabel">Student</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                </div>
              </div>
          </div> -->
            </div>
          </div>

        </div>z
        </div>
      </div>
    </section>

    <script>
$(document).ready(function(){
  $('button').click(function(){
id_emp = $(this).attr('id')
      $.ajax({url: "select.php",
      method:'post',
      data:{emp_id:id_emp},
       success: function(result){
  $(".info-body").html(result);
}});


      $('#CNT-infos').modal("show");
  })
})

</script>

    <script>
      function toggleNav(){
        document.body.classList.toggle("nav-open");
      }

      document.querySelector(".nav-close").addEventListener("click", () => {
        toggleNav();
      })
    </script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
