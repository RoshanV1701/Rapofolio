<?php
//session_start();
//$username=$_SESSION['user'];
//$_SESSION['user_name']=$username;
// $_SESSION['uploadfile']='uploadfile';
// $_SESSION['uploadfilesub']='uploadfilesub';
?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form  action="s.php" method="post" enctype="multipart/form-data">
       <input type="file" name="uploadfile" >
       <input type="submit" name="uploadfilesub" value="upload" >
     </form>
   </body>
 </html>
