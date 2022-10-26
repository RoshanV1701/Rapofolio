<?php
$servername = "localhost";
$username = "root";
$password = "";/* Put your password here*/


//Login DB

/* Create connection*/
$conn = mysqli_connect($servername, $username, $password);
/* Check connection*/
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* Create database*/
$myDB = "CREATE DATABASE IF NOT EXISTS login";

if ((mysqli_query($conn , $myDB))) {
       if (mysqli_warning_count($conn) == 0) { 
            echo "Database created successfully";
       }
} else {
       echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


//Record Table

$dbname= "login";

// Checking connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS record(
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        emailid VARCHAR(50) NOT NULL
        )";

if (mysqli_query($conn, $sql)) {
    echo "Table record created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);

/* Create connection*/
$conn = mysqli_connect($servername, $username, $password);
/* Check connection*/
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//Users DB

/* Create database*/
$myDB = "CREATE DATABASE IF NOT EXISTS users";

if ((mysqli_query($conn , $myDB))) {
       if (mysqli_warning_count($conn) == 0) { 
            echo "Database created successfully";
       }
} else {
       echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>