<?php
  
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "e-learning";
  
  // CREATE CONNECTION
  $conn = new mysqli($host, $username, $password, $db);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM `user`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);

  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        echo "<h3>Registered Users</h3>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<td><b>Name</b></td>";
        echo "<td><b>Email</b></td>";
        echo "<td><b>Mobile Number</b></td>";
        echo "<td><b>Qualification</b></td>";

       
        echo "</tr>";
        while($row = $result->fetch_assoc())
        {
           
            echo "<tr>";
            echo "<td>".$row["user_name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["mobile_number"]."</td>";
            echo "<td>".$row["qualification"]."</td>";
           
            echo "</tr>";
            
            
            /*echo 

                $row["name"]. " - name: " .
                $row["email"]. " | email: " . 
                $row["course_name"]. " | course_name: " ."<br>"; */
                  
              
        }
        echo "</table>";
       // echo '<a href="se_week1.php"> click here </a>';
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>