<?php
session_start();
$username=$_SESSION['user'];
$_SESSION['user_name']=$username;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .A2 {
  font-family: "Roboto Slab",serif;
  font-size: 26px;
  color:white;
  font-weight: 300;
  float: left;
  padding-top: 20px;
  padding-left: 100px;
      }
    </style>
  </head>
  <body>
    <div style="height:100px;width:1520px;background-color: #277fd9;">
      <h1 class="A2">Welcome <?php echo $username; ?>.Just Select suitable template which you wish your portfolio should look like.</h1>
      <a href="logout.php" style="float:right;color: white; padding-top: 35px;font-size: 20px;padding-right:20px;">LOGOUT</a>
    </div>
    <div style="height:100px;width:1520px;padding-left:120px;">
      <a href="home.php"><img src="Capture.PNG" alt="Template 1" height="600px" width="400px"></a>
      <a href="home2.php"><img src="Capture1.PNG" alt="Template 2" height="600px" width="400px"></a>
      <a href="home3.php"><img src="Capture2.PNG" alt="Template 3" height="600px" width="400px"></a>
    </div>
  </body>
</html>
