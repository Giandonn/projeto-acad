<?php      
    require ('db.php');

    $email = $_POST['email'];  
    $password = $_POST['pass'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $email= mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);
      
        $sql = "select *from USUARIO where username = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        } else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  