 <?php
 session_start(); // must be called before data is sent

$username=$_POST["uname"];
 $_SESSION['user_name'] =$username;
$password=$_POST["pswd"];
$check_password=$_POST["cpswd"];
$email=$_POST["email"];
$exist=0;
$conn=new mysqli("localhost","root","","login");
if(mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
}
else {
  $q = " SELECT username,password,emailid FROM record; ";
   $result = mysqli_query($conn,"$q");
while ($row=mysqli_fetch_assoc($result))
{
  // code...
  $check_username=$row['username'];
  // $check_password=$row['password'];
  $check_email=$row['emailid'];
  if (strcmp($password,$check_password)!==0)
   {
    // code...
    $exist=1;
    // echo "Please Enter same password as mentioned in password ";
    $message = " Password incorrect.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      include 'signup.html';
    return false;
  }
if ($username==$check_username) {
  // code...
  $exist=1;
  $message="Username already exists";
  echo "<script type='text/javascript'>alert('$message');</script>";
  include 'signup.html';
  return false;
}
else if ($email==$check_email) {
  // code...
  $exist=1;
  $message="This Email ID already exists";
  echo "<script type='text/javascript'>alert('$message');</script>";
  include 'signup.html';
  return false;
}
else {
}
}
if($exist==0)
{
  $sql="INSERT INTO record(username,password,emailid) values('$username','$password','$email');";
  mysqli_query($conn,"$sql");
  mysqli_close($conn);
  header("location:create.php");
}
}

 ?>
