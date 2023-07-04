<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "e-learning";
$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['addtutor'])){
    $tutorname=$_POST['name'];
    $tutor_email=$_POST['email'];
    $tutor_qualification=$_POST['qualification'];
    $tutor_password=$_POST['password'];
  
    $tutor_exp=$_POST['exp'];
 
    
    $sql="INSERT INTO tutor_details(tutor_name, tutor_id, tutor_pwd,tutor_exp, tutor_qualification) VALUES('$tutorname', '$tutor_email',  '$tutor_password','$tutor_exp','$tutor_qualification')";
    
    $result=mysqli_query($data,$sql);
    if($result){
        echo "<script>alert('Data Uploaded Successfully..')</script>";
    } else {
        echo "Upload Failed!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="selogo.jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>
  <title>Add Tutor</title>
 
</head>
<body>
  <header style="background-color:black;" class="header">
   
  </header>

  <?php ?>

  <div class="container pt-5">
    <center>
      <h3>ADD Tutor</h3>
      <br><br>

      <div>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="name">Username:</label></td>
        <td><input type="text" id="name" name="name" required></td>
      </tr>
    
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" id="email" name="email" required></td>
      </tr>
     
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" id="password" name="password" required></td>
      </tr>
      
      <tr>
        <td><label for="exp">Experience:</label></td>
        <td><input type="text" id="exp" name="exp" required></td>
      </tr>
      <tr>
      <tr>
        <td><label for="qualification">Qualification:</label></td>
        <td><input type="text" id="qualification" name="qualification" required></td>
      </tr>
        <td colspan="2">
          <br>
          <input type="submit" name="addtutor" class="btn btn-success" value="ADD Tutor">
        </td>
      </tr>
    </table>
  </form>
</div>

   </center>
   

</body>
</html>