<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inner Page - Top Most PhotoGrapher</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <?php
      $query= "SELECT * FROM about";
      $fetch = mysqli_query($conn,$query);
      while ($fetchData = mysqli_fetch_array($fetch)) {
         echo $fetchData['content']; 
         echo $fetchData['description']; 
      }
  ?>
       
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between"> 
      <div class="logo">
        <h1><a href="index.html">Photography</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto" href="projects.html">Projects</a></li>
          <li class="dropdown"><a href="services.html"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="food.html">Food PhotoGraphy</a></li>
              <li><a href="product.html">Product PhotoGraphy</a></li>
              <li><a href="photo.html"> Photo Editing</a></li>
              <li><a href="digital.html">Digital Maketing</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <center><h2>About</h2></center>
        </div>
      </div>
    </section>
   <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Capturing Dreams Is His Ultimate Goal</h3>
              <br>
              <br>
              <p>
                After a successful career in the marketing area working in consulting brands, he decided to get behind the lens. His photos have been presented in three solo exhibitions (Greece, Italy and Belgium) and his work has been published at different media including New York Times, Guardian and GEO. He has worked for a number of global marketing and management Hotel affiliations including Marriott Hotels & Resorts, Leading Hotels of the world, Design Hotels and Small Luxury Hotels and for a number of world-known individual hotels.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoGraphy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>