<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
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
    
      <h2 style="color: rgb(226, 19, 212);text-align: center;font-size: xx-large;">WEEK-2</h2>
          <img src="https://cdn4.vectorstock.com/i/1000x1000/23/03/student-notes-vector-28482303.jpg" width="100" height="50" alt="Lecture">
          <h1>LECTURE NOTES:</h1>
          <div style=" width: 100%; height: 650px;">  
            <div style=" width: 50%; height: 550px;float: left; background-color: white;">  
    <p><B>Software Development Life Cycle</B>, SDLC for short, is a well-defined, structured sequence of stages in software engineering to develop the intended software product.
          <li>Planning</li>
          <li>Requirement Gathering</li>
          <li>Feasibility study</li>
          <li>System Analysis</li>
          <li>Software Design</li>
          <li>Coding</li>
          <li>Testing</li>
          <li>Deployment</li>
          </p>
    <p>There are various software development life cycle models defined and designed which are followed during the software development process. These models are also referred as Software Development Process Models". Each process model follows a Series of steps unique to its type to ensure success in the process of software development.</p>
    <li>Waterfall Model</li>
          <li>Iterative Waterfall Model</li>
          <li>V-Model</li>
          <li>Spiral Model</li>
          <li>Incremental Model</li>
          <li>Evolutionary Model</li>
          <li>Agile Model</li>
</div>

<?php
$fetchVideos = mysqli_query($con, "SELECT * FROM videos where id=2");
$row = mysqli_fetch_assoc($fetchVideos);
$location = $row['location'];
    $name = $row['name'];
    echo "<div style='float: left; margin-right: 5px;'>
        <video src='".$location."' controls width='750' height='500' ></video>     
        <br>
    </div>";

?>  

</div>
<center>
            <a href="se_week3.php" > <button class="btn btn-primary">next</button></a>
            </center>

  </body>
</html>