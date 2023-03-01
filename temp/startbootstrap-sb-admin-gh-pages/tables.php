 <?php include ('html.php') ;?>
 <?php include ('header.php') ;?>
 <?php include ('sidenav.php') ;?>
    <main>
        <div class="container-fluid px-4"> 
            <br>                    
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        OPAppointment table
                </div>
                <div>
                    <table class="table">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Opaintment Date</th>
                            <th>Gender</th>
                            <th>service</th>
                            <th>Adhar Number</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                        <?php
                            $ipadd="localhost";
                            $username="root";
                            $password="";
                            $dbname="hospital";
                            $conn=mysqli_connect($ipadd,$username,$password,$dbname);
                        
                            $selectquery= "SELECT * FROM op_booking";
                            $selectTable = mysqli_query($conn,$selectquery);
                            while ($fetchData = mysqli_fetch_array($selectTable)) {
                            ?>
                        <tr>
                            
                            <td><?php echo $fetchData['first_name']; ?></td>
                            <td><?php echo $fetchData['last_name']; ?></td>
                            <td><?php echo $fetchData['appointment_date']; ?></td>
                            <td><?php echo $fetchData['gender']; ?></td>
                            <td><?php echo $fetchData['service']; ?></td>
                            <td><?php echo $fetchData['aadhar_number']; ?></td>
                            <td><?php echo $fetchData['contact_Number']; ?></td>
                            <td><?php echo $fetchData['aadhar_number']; ?></td>
                            <td><?php echo $fetchData['address']; ?></td>
                            

                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
             <?php include ('footer.php') ;?>
        </div>          
    </main>


                
