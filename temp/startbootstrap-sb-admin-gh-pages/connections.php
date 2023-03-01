<?php
$ipadd="localhost";
$username="root";
$password="";
$dbname="student";
$conn=mysqli_connect($ipadd,$username,$password,$dbname);
$Query="select * from cards";
$fetchData=mysqli_query($conn,$Query);

//cards
$string="SELECT * FROM `cards` ";
$query=mysqli_query($conn,$string);
$result=mysqli_fetch_array($query);

?>
