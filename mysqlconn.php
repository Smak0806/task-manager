<?php
   
function mysqlconn(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "task-manager";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("<script>console.log('Connection failed: " . $conn->connect_error . "');alert('Connection failed: " . $conn->connect_error . "');</script>");
    }
    
    return $conn;
}


?>