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
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.html">PhotoGraphic</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto" href="projects.html">Projects</a></li>
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
          <h2>Dashboard</h2>
          <ol>
            <li><a href="dashboard.php">Home</a></li>
            <li>ContactDetails</li>
          </ol>
        </div>
      </div>
    </section>
    <section class="inner-page">
      <div class="container">
        <div class="section-title">
         <center><h2>Contact Details</h2></center>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
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
                $contactDetails = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ($cName', '$cEmail', '$cSubject','$cMessage')";
                $fetchData1 = mysqli_query($conn, $contactDetails);
              } 
            ?>
            <center>
            <table class="table table-resposive" >
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
              </tr>
            <tbody>
            <?php
              $selectTablequery= "SELECT * FROM contact";
              $selectTable = mysqli_query($conn,$selectTablequery);
              while ($fetchData = mysqli_fetch_array($selectTable)) {
             ?>
             <tr>
              <td><?php echo $fetchData['id']; ?></td>
              <td><?php echo $fetchData['name']; ?></td>
              <td><?php echo $fetchData['email']; ?></td>
              <td><?php echo $fetchData['subject']; ?></td>
              <td><?php echo $fetchData['message']; ?></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
          </table>
          </center>
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