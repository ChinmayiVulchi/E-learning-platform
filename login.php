<?php 


    $con =new mysqli('localhost', 'root', '','e-learning');
    // database insert SQL code
    if($con->connect_error)
    {
        die("Failed to connect");
    }
   // $select_type=$_POST['select_type']; 
    $username = $_POST['email'];  
    $password = $_POST['login_password']; 
  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from user where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            echo '<script type="text/javascript">
            location.replace("http://localhost/elearning/elearningCodes/user_course_page1.html")
            
            </script>';
            
           
          
        }  
        else{  
            echo '<script type="text/javascript">
            location.replace("http://localhost/elearning/elearningCodes/login.html")
            </script>';
        }
?>  
