<?php


    $stmt = new MySQLi("localhost:3306","root","","tecnm");
    
    // Check connection
    if ($stmt->connect_error) {
        die("Connection failed: " . $stmt->connect_error);
    }

?>