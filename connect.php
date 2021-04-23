<?php

//Function to connect to hairdresser database

function connect_db(){
    $servername = "localhost";
    $username = "sean";
    $password = "conzo";
    $dbname = "irlvintage";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
    }
    $conn = connect_db();
