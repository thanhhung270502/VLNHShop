<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shop";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database, 3307);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // echo "Connection sucess";
?>
