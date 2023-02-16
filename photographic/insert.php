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

  $ipadd="localhost";
  $username="root";
  $password="";
  $dbname="student";
  $conn = mysqli_connect($ipadd,$username,$password,$dbname);
  $query="select *from about";
  $fetchData = mysqli_query($conn,$query);
  if(isset($_POST['submit']))
  {
    $pContent = $_POST['content'];
    $pDescription = $_POST['description'];
    $result = "INSERT INTO `about`(`content`, `description`) VALUES ('$pContent', '$pDescription')";
    if(mysqli_query($conn,$result)){
        echo "Success";
    }
    else{
        echo "Failed";
    }
  } 
  ?>
<form method="post" enctype="multipart/form-data" target="#">
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
        <br>
        <br>
        <br>
        <div class="row">
          <br>
          <br>
          <br>
          <div class="col-lg-12">
            <label for="ex1"><b>Content<b></label>
            <input class="form-control" id="ex1" type="text" name="content">
          </div>
          <br>
          <div class="col-lg-12">
            <label for="ex1"><b>Description</b></label>
            <input class="form-control" id="ex1" type="text" name="description">
          </div>
        </div>
          <br>
          <br>
         <div class="text-center">
          <button type="button" class="btn btn-primary" name="submit">Submit</button>
        </div>
        <br>
        <br>
        <br>
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
</form>
</body>
</html>