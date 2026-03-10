<?php
    // Initialize variables for the databse
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "sylvia";

    // Connection to our database
    $conn = new mysqli($host, $username, $password, $database, 3308);

    // Condition if their is an error occur
    if ($conn->connect_error){
        // Stop the connection if their is an error
        die("Connection Failed: ". $conn->connect_error);
    }
?>