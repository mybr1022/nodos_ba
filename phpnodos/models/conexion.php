<?php 
    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'nodos');
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }    
?>