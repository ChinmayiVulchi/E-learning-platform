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
    
      <h2 style="color: rgb(226, 19, 212);text-align: center;font-size: xx-large;">WEEK-3</h2>
          <img src="https://cdn4.vectorstock.com/i/1000x1000/23/03/student-notes-vector-28482303.jpg" width="100" height="50" alt="Lecture">
          <h1>LECTURE NOTES:</h1>
          <div style=" width: 100%; height: 650px;">  
            <div style=" width: 50%; height: 550px;float: left; background-color: white;">  
    <p>Software maintenance refers to the process of modifying and updating a software system after it has been delivered to the customer. This can include fixing bugs, adding new features, improving performance, or updating the software to work with new hardware or software systems. The goal of software maintenance is to keep the software system working correctly, efficiently, and securely, and to ensure that it continues to meet the needs of the users.

There are several key aspects of software maintenance, including:
Bug fixing: The process of finding and fixing errors and problems in the software.
Enhancements: The process of adding new features or improving existing features to meet the evolving needs of the users.
Performance optimization: The process of improving the speed, efficiency, and reliability of the software.
Porting and migration: The process of adapting the software to run on new hardware or software platforms.
Re-engineering: The process of improving the design and architecture of the software to make it more maintainable and scalable.
Documentation: The process of creating, updating, and maintaining the documentation for the software, including user manuals, technical specifications, and design documents.
Software maintenance is a critical part of the software development life cycle and is necessary to ensure that the software continues to meet the needs of the users over time. It is also important to consider the cost and effort required for software maintenance when planning and developing a software system.

Software maintenance is the process of modifying a software system after it has been delivered to the customer. The goal of maintenance is to improve the system’s functionality, performance, and reliability and to adapt it to changing requirements and environments.
          
</div>

<?php
$fetchVideos = mysqli_query($con, "SELECT * FROM videos where id=3");
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
            <a href="se_week4.php" > <button class="btn btn-primary">next</button></a>
            </center>

  </body>
</html>