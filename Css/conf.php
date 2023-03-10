<?php
    $servername = "localhost";

    $username = "root"; 
    
    $password = ""; 
    
    $dbname = "mit"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
    
        die("Connection failed: " . mysqli_connect_error());
    
    }
?>