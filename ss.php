 <?php
 $conn=mysqli_connect("localhost","root","","youtube");
 if($conn)
 {
   echo "Connected";
 }
 if (isset($_GET['id']))
  {
   $id=mysqli_real_escape_string($conn,$_GET['id']);
   $sql=mysqli_query($conn,"SELECT * FROM `image` WHERE `id`='$id'");
   while ($row=mysqli_fetch_assoc($sql))
    {
     $imagedata=$row["image"];
   }
   header("content-type: image/jpeg");
   echo $imagedata;

 }
 else {
   echo "Error";
 }
  ?>
