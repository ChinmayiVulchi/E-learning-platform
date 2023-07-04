<?php 


    $con =new mysqli('localhost', 'root', '','e-learning');
    // database insert SQL code
    if($con->connect_error)
    {
        die("Failed to connect");
    }
  
    $username = $_POST['admin_id'];  
    $password = $_POST['admin_password']; 
  
    
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from admin where admin_id = '$username' and admin_password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       
        if($count == 1){  
            echo '<script type="text/javascript">
            location.replace("http://localhost/elearning/elearningCodes/admin_activities.html")
            
            </script>';
            
            //echo '<a href="user_course_page1.html"> click </a>';/
          
        }  
        else{  
            echo '<script type="text/javascript">
            location.replace("http://localhost/elearning/elearningCodes/login.html")
            </script>';
        }
?>  
