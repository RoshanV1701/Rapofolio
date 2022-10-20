<?php
session_start();
$name=$_SESSION['user_name'];

  $conn=new mysqli("localhost","root","","users");
   if(mysqli_connect_error())
   {
     die('Connect Error ('. mysqli_connect_errno() .') '
     . mysqli_connect_error());
   }
   else
   {

     $q="CREATE TABLE $name (
      ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
      FirstName varchar(255) NOT NULL,
      LastName varchar(255),
      StreetAddress varchar(255) NOT NULL,
      City_Home varchar(255) NOT NULL,
      ZipCode varchar(255) NOT NULL,
      Phone varchar(10) NOT NULL,
      EmailId varchar(30) NOT NULL,
      Objective varchar(500) NOT NULL,
      JobTitle1 varchar(25) NOT NULL,
      Employer1 varchar(25) NOT NULL,
      City_Job1 varchar(25) NOT NULL,
      Start_Date1 date NOT NULL,
      End_Date1 date NOT NULL,
      JobTitle2 varchar(25) NOT NULL,
      Employer2 varchar(25) NOT NULL,
      City_Job2 varchar(25) NOT NULL,
      Start_Date2 date NOT NULL,
      End_Date2 date NOT NULL,
      JobTitle3 varchar(25) NOT NULL,
      Employer3 varchar(25) NOT NULL,
      City_Job3 varchar(25) NOT NULL,
      Start_Date3 date NOT NULL,
      End_Date3 date NOT NULL,
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
      Skills1 varchar(265) NOT NULL,
      Skills2 varchar(265) NOT NULL,
      Skills3 varchar(265) NOT NULL,
      Skills4 varchar(265) NOT NULL,
      Skills5 varchar(265) NOT NULL,
      Accomplishment varchar(265) NOT NULL,
      Certifications varchar(265) NOT NULL,
      WorkSamples varchar(265) NOT NULL,
      Image blob NOT NULL,
      ImageName varchar(35) NOT NULL
     )";
      if(mysqli_query($conn,$q))
      {
        echo "Table is created sucessfully";
        mysqli_close($conn);
        header("location:login.html");
        // $message="Table is created sucessfully";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        // include 'login.html';
      }
      else {
        echo "Table not created";
        header("location:signup.html");
      }
  }
    ?>
