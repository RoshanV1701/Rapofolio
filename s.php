<?php
session_start();
// $uploadfile=$_POST['uploadfile'];
// $uploadfilesub=$_POST['uploadfilesub'];
$conn=mysqli_connect("localhost","root","","youtube");
if($conn)
{
  echo "Connected";
}
  if (isset($_POST['uploadfilesub'])) {
    $imagename=mysqli_real_escape_string($conn,$_FILES['uploadfile']['name']);
    $imagedata=mysqli_real_escape_string($conn,file_get_contents($_FILES['uploadfile']['tmp_name']));
    $imagetype=mysqli_real_escape_string($conn,$_FILES['uploadfile']['type']);
    if (substr($imagetype,0,5)=="image")
     {
      echo "Working";

      $sql="INSERT INTO image VALUES ('','$imagename','$imagedata');";
         $query=mysqli_query($conn,$sql);
       if ($query) {
           echo "Uploaded ";
         }
    }
    else {
      echo "Only Images are allowed";
    }
//     $folder='images/';
//       move_uploaded_file($tmpfilename,$folder.$filename);
// //$sql="UPDATE `uploadimage` SET `imagename`=$filename WHERE 'id'=1;";
//   $sql="INSERT INTO `uploadimage`(`imagename`) VALUES ('$filename');";
//   $query=mysqli_query($conn,$sql);
//   if ($query) {
//     echo "Uploaded ";
//   }

}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <img src="ss.php?id=1" alt="" width="200px" height="200px">

   </body>
 </html>
