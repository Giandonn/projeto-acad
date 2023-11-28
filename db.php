<?php 
    $servername = "localhost:3307";
    $db_name = "ACADEMIA"; 
    $user = "root";
    $password = "";

    $conn = mysqli_connect($servername, $user, $password, $db_name); 

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>
