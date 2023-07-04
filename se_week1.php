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
                width: 750px;
                height: 400px
                }

    </style>
</head>

  <body>
    <h2 style="text-align: center;font-family: 'Times New Roman', Times, serif;color: white;">WELCOME TO SOFTWARE ENIGNEERING COURSE!!!</h2>

    <div class="dashboard">
        <a href="#WEEK-1">WEEK-1 </a>
        <a href="se_week2.php">WEEK-2 </a>
        <a href="se_week3.php">WEEK-3 </a>
        <a href="se_week4.php">WEEK-4 </a>
        </div>

    <section id="WEEK-2">
      <h2 style="color: rgb(226, 19, 212);text-align: center;font-size: xx-large;">WEEK-1</h2>
          <img src="https://cdn4.vectorstock.com/i/1000x1000/23/03/student-notes-vector-28482303.jpg" width="100" height="50" alt="Lecture">
          <h1>LECTURE NOTES:</h1>

    <div style=" width: 100%; height: 650px;">  
      <div style=" width: 50%; height: 550px;float: left; background-color: white;">  
        <!--<p><B>Software</B> is more than just a program code. 
          A program is an executable code, which serves some computational purpose. 
          Software is considered to be collection of executable programming code, associated libraries and documentations. 
          Software, when made for a specific requirement is called <B>software product</B>.
        </p>
          <p><B>Engineering</B> on the other hand, is all about developing products, using well-defined, scientific principles and methods.</p>
          <p><B>Software engineering</B> is an engineering branch associated with development of software product using well-defined scientific principles, methods and procedures. 
            The outcome of software engineering is an efficient and reliable software product.</p>
            <p><B>Characteristics of good software: </B><br>
              A software product can be judged by what it offers and how well it can be used. This software must satisfy on the following grounds:
              <li>Operational</li>
              <li>Transitional</li>
              <li>Maintenance</li>
              </p>-->
      </div>  
      <?php
          $fetchVideos = mysqli_query($con, "SELECT * FROM videos where id=1");
          $row = mysqli_fetch_assoc($fetchVideos);
          $location = $row['location'];
              $name = $row['name'];
              echo "<div style='float: left; margin-right: 5px;'>
                  <video src='".$location."' controls width='750' height='500' ></video>     
                  <br>
                  
              </div>";

          ?>  


  </div>  
    </section>
    </div>
            <a href="se_week2.php"> <button class="btn btn-primary">next</button></a>
          </div>
  </body>
</html>