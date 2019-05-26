<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>janakhpon</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="KW_progressContainer">
    <div class="KW_progressBar">

    </div>
  </div>
  <div class="page">

  <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/author-2.svg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.php" class="logo">Janakh Pon</a></h1>
              <ul>
                <li><a href="index.php"><span><small>01</small>Home</span></a></li>
                <li><a href="about.php"><span><small>02</small>About</span></a></li>
                <li><a href="services.php"><span><small>03</small>Services</span></a></li>
                <li><a href="portfolio.php"><span><small>04</small>Portfolio</span></a></li>
								<li><a href="contact.php"><span><small>05</small>Contact</span></a></li>
								<li class="active"><a href="auth.php"><span><small>06</small>Auth</span></a></li>
                <li><a href="projects.php"><span><small>07</small>Projects</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="index.html"><span class="logo-img" style="background-image: url(images/person_1.jpg);"></span>Janakh
                  Pon</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">






            <div class="col-md-6 pr-md-5">
            <?php
                if(isset($_SESSION['id'])){
                    ?>


                    <form method="post" action="func_logout.php">

                        <div class="form-group">
                          <label>You'have already signed in to Admin mode!</label>
                          <input type="submit" name="submit" value="LOG OUT" class="btn btn-primary py-3 px-5">
                          <a class="btn btn-primary py-3 px-5" href="admin.php">MANAGE</a>
                        </div>

                          
                    

                    </form>


                    <?php
                }else{
            ?>


              <form method="post" action="func_signin.php">
               <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="LOG IN" class="btn btn-primary py-3 px-5">
                </div>
              </form>

              <?php }?>

            </div> 
            
               

          </div>
        </div>
      </section>

      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact me</h2>
                <p class="h3 email"><a href="#">minchanhtutoo@.com</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

            <p>
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | Made
                with <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="https://github.com/janakhpon"
                  target="_blank">Janakhpon</a>

              </p>
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
          <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
          <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

    </div>

  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>