<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CMU/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
updateProfile();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="resource/css/styless.css" rel="stylesheet" />
  </head>
  <body class="nav-open">
    <section class="class">
      <div class="container pt-md-5">
        <div class="row">
          <div class="nav">
            <div class="info">
              <button type="button" class="info-btn nav-close">
                <ion-icon name="close-outline" size="large"></ion-icon>
              </button>
              <!-- <div class="pfp-L">
                <?php profilePic(); ?>
              </div> -->
              <!-- <h1><?php echo $user->data()->name; ?></h1> -->
            </div>
          </div>

          <main class="main">
            <div class="pfp-S">
              <?php profilePic(); ?>
            </div>
            <button class="name-btn" type="button" onclick="toggleNav()"><h1><?php echo $user->data()->name; ?></h1></button>

            <div class="pfp-S">
              <?php profilePic(); ?>
            </div>
            <button class="name-btn" type="button" onclick="toggleNav()"><h1><?php echo $user->data()->name; ?></h1></button>

            
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
        </div>
      </div>
    </section>

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
