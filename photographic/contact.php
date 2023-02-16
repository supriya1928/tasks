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
  $Query="select *from contact";
  $fetchData = mysqli_query($conn,$Query);
  if(isset($_POST['submit']))
  {
    $cName = $_POST['name'];
    $cEmail = $_POST['email'];
    $cSubject = $_POST['subject'];
    $cMessage = $_POST['message'];
    $contactDetails = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$cName', '$cEmail', '$cSubject','$cMessage')";
    $fetchData1 = mysqli_query($conn, $contactDetails);
  } 
  ?>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.html">PhotoGraphy</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
         <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto" href="projects.html">projects</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
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
          <center><h2>Contact</h2></center>
        </div>
      </div>
    </section>
     <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">
         <center><h2>Contact Details</h2></center>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>PhotoGraphy</h3>
              <p>I am so happy you are interested in inquiring with me! Please take the time to fill out this form and you will receive a reply from me within 48 hours! </p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div class="d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3905/3905001.png" height="40px" width="40px">
                <p>KK Nagar<br>Chennai, NY 535022</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <img src="https://cdn-icons-png.flaticon.com/512/646/646094.png" height="30px" width="30px">
                <p>info@photo.com</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <img src="https://cdn-icons-png.flaticon.com/512/254/254638.png" height="40px" width="40px">
                <p>+91 868 646 4394</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <form method="post" enctype="multipart/form-data" target="#">
              <div class="form-group">
                <input  method="post" type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input method="post" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input method="post" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <input method="post" class="form-control" name="message" rows="5" placeholder="Message" required>
              </div>
              <br>
              <br>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Photography</span></strong>. All Rights Reserved
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