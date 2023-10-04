<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "e-learning";
$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['deletetutor'])){
    
    $tutor_email=$_POST['email'];

    
    $sql="delete from tutor_details where tutor_id='$tutor_email' ";
    //$res="delete from tutor_details where tutor_id='$tutor_email' "
    
    $result=mysqli_query($data,$sql);
    if($data->query($sql)===TRUE){
        echo "<script>alert('Deleted Successfully..')</script>";
    } else {
        echo "Tutor not found!!";
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
   >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    ></script>
  <title>Admin | Add Tutor</title>
 
</head>
<body>
  <header style="background-color:black;" class="header">
   
  </header>

  <?php ?>

  <div class="container pt-5">
    <center>
      <h3>Delete Tutor</h3>
      <br><br>

      <div>
  <form action="" method="post">
    <table>
    
    
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" id="email" name="email" required></td>
      </tr>
     
     
        <td colspan="2">
          <br>
          <input type="submit" name="deletetutor" class="btn btn-success" value="Delete Tutor">
        </td>
      </tr>
    </table>
  </form>
</div>

   </center>
   

</body>
</html>
