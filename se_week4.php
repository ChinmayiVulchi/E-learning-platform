<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .dashboard{
                font-size: 30px;
                font-weight: bold;
                display:block;
               /* background-color: rgb(226, 196, 175);*/
                height: 50px;
                display: block;
                text-align: right;
                position: relative;
                padding-top: 0px;
                background-color: bisque;
                background-repeat: no-repeat;
                background-size: cover;
            
            }

            body{
                background-image: url("https://static.vecteezy.com/system/resources/previews/005/263/703/original/e-learning-concept-laptop-and-education-icon-on-green-background-with-copy-space-online-study-with-computer-from-home-free-vector.jpg")
            }

            .grid-container {
                display: inline-block;
                gap: 20px;
                padding: 10px;
                background-color: white;
                position: bottom;
                margin-right: 100px;
                width: 500px;
                height: 500px
                }

    </style>
</head>

  <body>
    
    <h2 style="color: rgb(226, 19, 212);text-align: center;font-size: xx-large;">WEEK-4</h2>
          <img src="https://cdn4.vectorstock.com/i/1000x1000/23/03/student-notes-vector-28482303.jpg" width="100" height="50" alt="Lecture">
          <h1>LECTURE NOTES:</h1>
          <div style=" width: 100%; height: 650px;">  
            <div style=" width: 50%; height: 550px;float: left; background-color: white;">  
    <p>Verification is the process of checking that a software achieves its goal without any bugs. It is the process to ensure whether the product that is developed is right or not. It verifies whether the developed product fulfills the requirements that we have. Verification is static testing. 
Verification means Are we building the product right? 

Validation is the process of checking whether the software product is up to the mark or in other words product has high level requirements. It is the process of checking the validation of product i.e. it checks what we are developing is the right product. it is validation of actual and expected product. Validation is the dynamic testing. 
Validation means Are we building the right product? 
          </p>
    </div>
    <?php
$fetchVideos = mysqli_query($con, "SELECT * FROM videos where id=6");
$row = mysqli_fetch_assoc($fetchVideos);
$location = $row['location'];
    $name = $row['name'];
    echo "<div style='float: left; margin-right: 5px;'>
        <video src='".$location."' controls width='750' height='500' ></video>     
        <br>
    </div>";

?>  
    <br>
    <br>
    <center>
    <a href="quiz.html" style="background-color: brown;font-size: xx-large;color:rgb(234, 21, 42);"><button type="submit" value="Submit" style="text-align:center">Attempt Quiz!</button></a>
    </center>
  </body>
</html>