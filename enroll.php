<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

// get the post records
$email = $_POST['email'];
$course_name = $_POST['course_name'];
$name = $_POST['name'];
$con =new mysqli('localhost', 'root', '','e-learning');
// database insert SQL code.
if($con->connect_error)
{
    die("Failed to connect");
}

$sql = "INSERT INTO `course_enroll` (`name`,`email`, `course_name`) VALUES ('$name','$email', '$course_name')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	
    /*echo '<a href="user_activities.php"> click here </a>';  
    echo 'You are successfully enrolled in ',$course_name;*/
    echo '<script type="text/javascript">
            location.replace("http://localhost/elearning/elearningCodes/user_activities.php")
            </script>';
}
?>