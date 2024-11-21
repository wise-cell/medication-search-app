<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "search_app";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn === false) {
    // Handle the error
    die("ERROR: Could not connect to the database. " . mysqli_connect_error());
}