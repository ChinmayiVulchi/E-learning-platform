<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// get the post records
$user_name = $_POST['name'];
$email_id = $_POST['email'];
$gender = $_POST['Gender'];
$qualification = $_POST['Qualification'];
$dob = $_POST['date_birth'];
$Address = $_POST['address'];
$password = $_POST['password'];
$mobile=$_POST['mobile'];
//opens a connection to mysql server
$con =new mysqli('localhost', 'root', '','e-learning');
// database insert SQL code
if($con->connect_error)
{
    die("Failed to connect");
}
if($email_id=="")
{
    echo "Registration failed." ;
    echo '<a href="registration.html"> click here </a>';  
}
else
{
$sql = "INSERT INTO `user` (`user_name`, `email`, `datte_of_birth`, `qualification`, `gender`,`address`,`password`,`mobile_number`) VALUES ('$user_name', '$email_id', '$dob', '$qualification','$gender','$Address','$password','$mobile')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
    echo '<a href="login.html"> click here </a>';  
}
}
?>