<?php
session_start();
$name=$_SESSION['user_name'];
$_SESSION['user']=$name;

$fname=$_POST['fname'];
$_SESSION['fname']=$fname;
$lname=$_POST['lname'];
$SAddr=$_POST['StAddr'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$phone=$_POST['phoneno'];
$email=$_POST['email'];
$objective=$_POST['objective'];
$Jtitle1=$_POST['Jtitle1'];
$Emp1=$_POST['Emp1'];
$Jcity1=$_POST['Jcity1'];
$Sdate1=$_POST['Sdate1'];
$Edate1=$_POST['Edate1'];
$Jtitle2=$_POST['Jtitle2'];
$Emp2=$_POST['Emp2'];
$Jcity2=$_POST['Jcity2'];
$Sdate2=$_POST['Sdate2'];
$Edate2=$_POST['Edate2'];
$Jtitle3=$_POST['Jtitle3'];
$Emp3=$_POST['Emp3'];
$Jcity3=$_POST['Jcity3'];
$Sdate3=$_POST['Sdate3'];
$Edate3=$_POST['Edate3'];
$schoolX=$_POST['schoolX'];
$YCX=$_POST['YCX'];
$percentageX=$_POST['percentageX'];
$schoolXII=$_POST['schoolXII'];
$YCXII=$_POST['YCXII'];
$percentageXII=$_POST['percentageXII'];
$Clgname=$_POST['colname'];
$FOS=$_POST['FOS'];
$YC=$_POST['YC'];
$percentageDeg=$_POST['percentage_deg'];
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];
$skill4=$_POST['skill4'];
$skill5=$_POST['skill5'];
$accomplishment=$_POST['accomplishment'];
$certificate=$_POST['certificate'];
$worksample=$_POST['worksample'];
// $uploadfile=$_POST['uploadfile'];
// $uploadfilesub=$_POST['uploadfilesub'];
$conn=new mysqli("localhost","root","","users");
if(mysqli_connect_error())
{

  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
}
else {
  if($conn)
  {
    echo "Connected";
  }

  if (isset($_POST['uploadfilesub'])) {
    $filename=$_FILES['uploadfile']['name'];
    $tmpfilename=$_FILES['uploadfile']['tmp_name'];
    $folder='Type2/images/'.$filename;
    $_SESSION['folder']=$filename;

      move_uploaded_file($tmpfilename,$folder);
  //$sql="UPDATE `uploadimage` SET `imagename`=$filename WHERE 'id'=1;";
  //$sql="INSERT INTO `uploadimage`(`imagename`) VALUES ('$filename');";
  $sql="INSERT INTO $name (FirstName,LastName,StreetAddress,City_Home,ZipCode,
  Phone,EmailId,Objective,JobTitle1,Employer1,City_Job1,Start_Date1,End_Date1,
  JobTitle2,Employer2,City_Job2,Start_Date2,End_Date2,
  JobTitle3,Employer3,City_Job3,Start_Date3,End_Date3,
  School_Name_X,Year_Of_Completion_X,Percentage_X,School_Name_XII,Year_Of_Completion_XII,
  Percentage_XII,College_Name,Field_Of_Study,Year_Of_Completion_Degree_X,Percentage_Degree,
  Skills1,Skills2,Skills3,Skills4,Skills5,Accomplishment,Certifications,WorkSamples,Image,ImageName)
  values('$fname','$lname','$SAddr','$city','$zip',
    '$phone','$email','$objective','$Jtitle1','$Emp1','$Jcity1','$Sdate1','$Edate1',
    '$Jtitle2','$Emp2','$Jcity2','$Sdate2','$Edate2',
    '$Jtitle3','$Emp3','$Jcity3','$Sdate3','$Edate3',
    '$schoolX','$YCX','$percentageX','$schoolXII','$YCXII',
    '$percentageXII','$Clgname','$FOS','$YC','$percentageDeg',
    '$skill1','$skill2','$skill3','$skill4','$skill5','$accomplishment','$certificate',
    '$worksample','$filename','$filename');";

  $query=mysqli_query($conn,$sql);
  if ($query) {
    echo "Uploaded ";
    header("location:Type2/test.php");
  }

  }

//   $sql="INSERT INTO $name (FirstName,LastName,StreetAddress,City_Home,ZipCode,
//   Phone,EmailId,Objective,JobTitle1,Employer1,City_Job1,Start_Date1,End_Date1,
//   JobTitle2,Employer2,City_Job2,Start_Date2,End_Date2,
//   JobTitle3,Employer3,City_Job3,Start_Date3,End_Date3,
//   School_Name_X,Year_Of_Completion_X,Percentage_X,School_Name_XII,Year_Of_Completion_XII,
//   Percentage_XII,College_Name,Field_Of_Study,Year_Of_Completion_Degree_X,Percentage_Degree,
//   Skills1,Skills2,Skills3,Skills4,Skills5,Accomplishment,Certifications,WorkSamples,Image)
//   values('$fname','$lname','$SAddr','$city','$zip',
//     '$phone','$email','$objective','$Jtitle1','$Emp1','$Jcity1','$Sdate1','$Edate1',
//     '$Jtitle2','$Emp2','$Jcity2','$Sdate2','$Edate2',
//     '$Jtitle3','$Emp3','$Jcity3','$Sdate3','$Edate3',
//     '$schoolX','$YCX','$percentageX','$schoolXII','$YCXII',
//     '$percentageXII','$Clgname','$FOS','$YC','$percentageDeg',
//     '$skill1','$skill2','$skill3','$skill4','$skill5','$accomplishment','$certificate','$worksample','$image');";
//
//   if(mysqli_query($conn,"$sql"))
//   {
//     echo "Added";
//     header("location:selectImage.php");
//   }
//   else {
// echo "Noooooooo";
//   }
  mysqli_close($conn);
}
 ?>
