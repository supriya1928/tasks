 <?php include ('html.php') ;?>
 <?php include ('header.php') ;?>
 <?php include ('sidenav.php') ;?>
 <?php
    $ipadd="localhost";
    $username="root";
    $password="";
    $dbname="hospital";
    $conn=mysqli_connect($ipadd,$username,$password,$dbname);
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['Llastname'];
        $appointment = $_POST['date'];
        $Gender = $_POST['gender'];
        $service = $_POST['service'];
        $aadharNumber = $_POST['aadhar'];
        $contactNumber = $_POST['contact'];
        $email = $_POST['eamil'];
        $address = $_POST['address'];
        $insertdata  = "INSERT INTO `op_booking`(first_name`, `last_name`, `appointment_date`, `gender`, `service`, `aadhar_number`, `contact_Number`, `aadhar_number`, `address`) VALUES ($firstName', '$lastName', '$dateofbirth', '$phoneno', '$appointment', '$Gender', '$service', '$aadharNumber', '$contactNumber', '$email', '$address')";
        $fetchData = mysqli_query($conn,$insertdata);

    }  
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Op Appointment Booking</h3></div>
                        <form class="form-floating" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-floating  col-lg-6 mb-3">
                                      <input method="post" type="text" class="form-control" id="floatingInput" placeholder="enter your first name" name="firstname">
                                      <label for="floatingInput">First Name</label>
                                    </div>
                                    <div  method="post" class="form-floating  col-lg-6 mb-3">
                                      <input type="text" class="form-control" id="floatingInput" placeholder="enter your last name" name="Llastname">
                                      <label for="floatingInput">Last Name</label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3 ">
                                        <div class="form-group">
                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="floatingInput" placeholder="Select birth date" value min="2023-01-03" name="date">
                                                <label class="floatingInput">select appointment date</label>                                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 form-floating">
                                        <select class="form-select" id="floatingSelectGrid"  aria-label="Floating label select example" name="gender">
                                            <option selected>-- Gender --</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                       <label class="floatingInput">Select Gender</label>
                                    </div>
                                    <div class="col-lg-3 form-floating">
                                        <select  class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name=service>
                                            <option selected>-- Service --</option>
                                            <option value="1">Dental Checkup</option>
                                            <option value="2">Full Body Checkup</option>
                                            <option value="3">ENT Checkup</option>
                                            <option value="4">Heart Checkup</option>
                                        </select>
                                        <label class="floatingInput">Select service</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter Your AAdhar Number" name="aadhar">
                                                <label for="floatingInput">Aadhar Number</label>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <br>                                       
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Contact Number" name="contact">
                                        <label for="floatingInput">Contact number</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="eamil">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <div class="form-floating">
                                        <textarea class="form-control" placeholder="Address" id="floatingTextarea2" style="height: 100px" name="address"></textarea>
                                        <label for="floatingTextarea2">Address</label>
                                   </div>
                                </div>
                                <br>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>   
                                    <button class="btn btn-primary">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include ('footer.php') ;?>
        