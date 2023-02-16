<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Information</title>
	<style>

	</style>
</head>
<body>
	<?php
	$ipadd="localhost";
	$username="root";
	$password="";
	$dbname="student";
	$conn = mysqli_connect($ipadd,$username,$password,$dbname);
	if(isset($POST['submit']))
	{
		$fName = $_POST['fname'];
		$lName = $_POST['lname'];
		$sContact = $_POST['contact'];
		$sEmail = $_POST['email'];
		$sAddress = $_POST['address'];
		$sDate = $_POST['date']
		$studentDetails = "insert into `student_info`(`S_ID`, `S_NAME`, `S_Contact`, 'S_Email', `S_Address`) VALUES ('$fName','$lName','$sEmail','sContact','sAddress')";
		if(mysqli_query($con,$studentDetails)){
        echo "Success";
    }
    else{
        echo "Failed";
    }

	}
	
	?>
	<center><h2>Registration Form</h2>
	<form action="localhost/development/student.php" target="#">
		<label for="fname"><b>First name:</b></label>
  			<input method='post' type="text" id="fname" name="fname" value="">
  		<label for="lname"><b>Last name:</b></label>
  			<input method='post' type="text" id="lname" name="lname" value="">
  		<br><br>
  		<label for="contact"><b>Contact:</b></label>
  			<input method='post' type="text" id="contact" name="contact" value="">
  		<label for="email"><b>Email:</b></label>  
 			<input method='post' type="text" placeholder="Enter Email" name="email" required>  
  		<br><br>
  		<label for="text"><b>Address:</b></label>
		<textarea method='post'rows="5" cols="50" name="address" form="">
			</textarea>
		<br><br>
		<label for="birthday"><b>Date:</b></label>
			<input method='post' type="date" id="birthday" name="date">

  		<input method='post' type="submit" value="Submit">
	</form>
</center>
	<br>
	<br>
	<center>
	<table border="10px" cellspacing="10px">
		<tr>
			<th>S_Id</th>
			<th>S_Name</th>
			<th>S_Address</th>
			<th>S_Contact</th>
		</tr>
		<tbody>
			<?php
				while ($fetchData1=mysqli_fetch_array($studentDetails)) {
				?>
					<tr>
						<td><?php echo $fetchData1['S_ID']; ?></td>
						<td><?php echo $fetchData1['S_NAME']; ?></td>
						<td><?php echo $fetchData1['S_ADDRESS']; ?></td>
						<td><?php echo $fetchData1['S_CONTACT']; ?></td>
					</tr>
				<?php
				}
			?>
		</tbody>

	</table>
	</center>
</body>
</html>