<?php
session_start();

$username=$_POST["uname"];
$password=$_POST["pswd"];
// $email=$_POST["email"];

$conn=new mysqli("localhost","root","","login");
if(mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
}
else {
  $q = " select * from record  where username = '$username' && password = '$password'";

  $result = mysqli_query($conn, $q);

  $num = mysqli_num_rows($result);
  $_SESSION['user']=$username;
  header('location:selectTemp.php');
//   if($num == 1){
//   	$_SESSION['user']=$username;
//     header('location:selectTemp.php');
//   }
//   else{
// echo "Please Enter correct Username and Password";
//  header('location:login.html');
//
//     }
  }

 ?>
