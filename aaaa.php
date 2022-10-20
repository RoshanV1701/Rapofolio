<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE ABC (
 ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
 FirstName varchar(255) NOT NULL,
 LastName varchar(255),
 StreetAddress varchar(255) NOT NULL,
 City_Home varchar(255) NOT NULL,
 ZipCode varchar(255) NOT NULL,
 Phone varchar(10) NOT NULL,
 EmailId varchar(30) NOT NULL,
 Objective varchar(500) NOT NULL,
 JobTitle varchar(25) NOT NULL,
 Employer varchar(25) NOT NULL,
 City_Job varchar(25) NOT NULL,
 Start_Date date NOT NULL,
 End_Date date NOT NULL,
 Summary varchar(500) NOT NULL,
 School_Name_X varchar(50) NOT NULL,
 Year_Of_Completion_X date NOT NULL,
 Percentage_X float NOT NULL,
 School_Name_XII varchar(50) NOT NULL,
 Year_Of_Completion_XII date NOT NULL,
 Percentage_XII float NOT NULL,
 College_Name varchar(50) NOT NULL,
 Field_Of_Study varchar(50) NOT NULL,
 Year_Of_Completion_Degree_X date NOT NULL,
 Percentage_Degree float NOT NULL,
 Skills varchar(265) NOT NULL,
 Tools varchar(265) NOT NULL,
 Accomplishment varchar(265) NOT NULL,
 Certifications varchar(265) NOT NULL,
 WorkSamples varchar(265) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table ABC created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
