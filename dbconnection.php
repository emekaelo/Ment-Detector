<?php
// Database connection

//Development connection
$dbserver_name = "localhost";
$dbAdmin_name = "root";
$dbPassword = "";
$dbName = "mentdetector";

//Production connection
//$dbserver_name = "us-cdbr-east-02.cleardb.com";
//$dbAdmin_name = "b2017957442c6e";
//$dbPassword = "08e60b96";
//$dbName = "heroku_2b20162dc04a295";

// Database connection
$dbconnect = mysqli_connect($dbserver_name, $dbAdmin_name, $dbPassword, $dbName);

// checks if there is a connection error to the database and handles it
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit(); // means the same as die();
} else {
    // Inserts user data(email) into the database
    $user_data = "INSERT INTO subscribers (email) VALUES ('$email');";

    // checks if the insertion to the database throws an error and then handles it
    if (mysqli_query($dbconnect, $user_data)) {
    } else {
        die('Error: ' . mysqli_error($dbconnect));
    }
    // closes the database connection
    mysqli_close($dbconnect);
}

// mysql://b2017957442c6e:08e60b96@us-cdbr-east-02.cleardb.com/heroku_2b20162dc04a295?reconnect=true