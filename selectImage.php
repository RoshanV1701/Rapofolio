<?php
session_start();
$uname=$_SESSION['user'];
$_SESSION['user']=$uname;
$firstname=$_SESSION['fname'];
$conn=new mysqli("localhost","root","","users");
if(mysqli_connect_error())
{

  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
}
else {
   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
       $sql="UPDATE $uname SET 'Image'=$file WHERE 'FirstName'=$firstname;";
       if(mysqli_query($conn, "$sql"))
       {
            echo '<script>alert("Image Inserted into Database")</script>';
            header("location:selectTemp.php");
       }
       else {
         echo '<script>alert("Sorrrryyyyyyyyyyyy")</script>';
       }

}

?>
<!DOCTYPE html>
<html>
     <head>

     </head>
     <body>
          <br /><br />
          <div class="container" style="width:500px;">
               <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>
               <br />
               <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image" id="image" />
                    <br />
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
               </form>
               <br />
               <br />

          </div>
     </body>
</html>
<script>
$(document).ready(function(){
     $('#insert').click(function(){
          var image_name = $('#image').val();
          if(image_name == '')
          {
               alert("Please Select Image");
               return false;
          }
          else
          {
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
               }
          }
     });
});
</script>
