<?php
session_start();
$username=$_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      p{
        color: red;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
    <div style="background-color:yellow;">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "youtube";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if(mysqli_connect_error())
      {
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
      }
      else
       {
        $q = " SELECT username,password FROM account; ";
         $result = mysqli_query($conn,"$q");
      while ($row=mysqli_fetch_assoc($result))
      {
        // code...
        $check_username=$row['username'];
        // $check_password=$row['password'];
        $check_password=$row['password'];
      }
      echo "City";
      echo $check_username;
      // echo "\qasdc";
      // echo "</p>";
      // echo "<p>";
      // echo $check_password;
      // echo "</p>";
    }
      ?>
    </div>

  </body>
</html>
