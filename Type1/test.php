<?php
session_start();
$user=$_SESSION['user_name'];
$folder=$_SESSION['folder'];
?>
<!DOCTYPE html>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">

      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <div>
          <img src="images/<?php echo "$folder"; ?>" style="width:100%" alt="Avatar">
          </div>

          <!--  -->
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <br><br>
            <h2><?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT FirstName FROM $user; ";
               $result = mysqli_query($conn,"$q");
            while ($row=mysqli_fetch_assoc($result))
            {
              // code...
              $check_username=$row['FirstName'];
              // $check_password=$row['password'];
            //  $check_password=$row['password'];
            }
            echo $check_username;
            // echo "</p>";
            // echo "<p>";
            // echo $check_password;
            // echo "</p>";
          }
            ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <!-- <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p> -->
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "users";

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
            $q = " SELECT StreetAddress,City_Home FROM $user; ";
             $result = mysqli_query($conn,"$q");
          while ($row=mysqli_fetch_assoc($result))
          {
            // code...
            $Addr=$row['StreetAddress'];
            $City=$row['City_Home'];
            // $check_password=$row['password'];
          //  $check_password=$row['password'];
          }

          echo $Addr;
          echo "/";
          echo $City;

          // echo "</p>";
          // echo "<p>";
          // echo $check_password;
          // echo "</p>";
        }
          ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "users";

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
            $q = " SELECT EmailId FROM $user; ";
             $result = mysqli_query($conn,"$q");
          while ($row=mysqli_fetch_assoc($result))
          {
            // code...
            $Email=$row['EmailId'];
                // $check_password=$row['password'];
          //  $check_password=$row['password'];
          }
          echo $Email;
          // echo "</p>";
          // echo "<p>";
          // echo $check_password;
          // echo "</p>";
        }
          ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
            <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "users";

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
            $q = " SELECT Phone FROM $user; ";
             $result = mysqli_query($conn,"$q");
          while ($row=mysqli_fetch_assoc($result))
          {
            // code...
            $Phone=$row['Phone'];
                // $check_password=$row['password'];
          //  $check_password=$row['password'];
          }
          echo $Phone;
          // echo "</p>";
          // echo "<p>";
          // echo $check_password;
          // echo "</p>";
        }
          ?>
          </p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>
            <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "users";

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
            $q = " SELECT Skills1 FROM $user; ";
             $result = mysqli_query($conn,"$q");
          while ($row=mysqli_fetch_assoc($result))
          {
            // code...
            $Skills1=$row['Skills1'];
                // $check_password=$row['password'];
          //  $check_password=$row['password'];
          }
          echo $Skills1;
          // echo "</p>";
          // echo "<p>";
          // echo $check_password;
          // echo "</p>";
        }
          ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
            $q = " SELECT Skills2 FROM $user; ";
             $result = mysqli_query($conn,"$q");
            while ($row=mysqli_fetch_assoc($result))
            {
            // code...
            $Skills2=$row['Skills2'];
                // $check_password=$row['password'];
            //  $check_password=$row['password'];
            }
            echo $Skills2;
            // echo "</p>";
            // echo "<p>";
            // echo $check_password;
            // echo "</p>";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
            $q = " SELECT Skills3 FROM $user; ";
             $result = mysqli_query($conn,"$q");
            while ($row=mysqli_fetch_assoc($result))
            {
            // code...
            $Skills3=$row['Skills3'];
                // $check_password=$row['password'];
            //  $check_password=$row['password'];
            }
            echo $Skills3;
            // echo "</p>";
            // echo "<p>";
            // echo $check_password;
            // echo "</p>";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
            $q = " SELECT Skills4 FROM $user; ";
             $result = mysqli_query($conn,"$q");
            while ($row=mysqli_fetch_assoc($result))
            {
            // code...
            $Skills4=$row['Skills4'];
                // $check_password=$row['password'];
            //  $check_password=$row['password'];
            }
            echo $Skills4;
            // echo "</p>";
            // echo "<p>";
            // echo $check_password;
            // echo "</p>";
            }
            ?>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>
<!--
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
        </p>
        <p>Spanish</p>
        <div class="w3-light-grey w3-round-xlarge">
        <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
      </div>
      <p>German</p>
      <div class="w3-light-grey w3-round-xlarge">
      <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
    </div> -->
    <br>

    <a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="print" />print</a>

  </div>
</div><br>

<!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-twothird">
  <div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"></i>Objective</h2>
    <p>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "users";

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
        $q = " SELECT Objective FROM $user; ";
        $result = mysqli_query($conn,"$q");
        while ($row=mysqli_fetch_assoc($result))
        {
          // code...
          $Objective=$row['Objective'];
          // $check_password=$row['password'];
          //  $check_password=$row['password'];
        }
        echo $Objective;
        // echo "</p>";
        // echo "<p>";
        // echo $check_password;
        // echo "</p>";
      }
      ?>
      </div>



      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT JobTitle1,Employer1 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $JobTitle1=$row['JobTitle1'];
                $Employer1=$row['Employer1'];
                // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }

              echo $JobTitle1;
              echo "/";
              echo "$Employer1";

              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Start_Date1,End_Date1 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Start_Date1=$row['Start_Date1'];
                $End_Date1=$row['End_Date1'];
                // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $Start_Date1;
              echo "/";
              echo $End_Date1;
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </h6>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT City_Job1 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $City_Job1=$row['City_Job1'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo "City:";
              echo $City_Job1;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT JobTitle2,Employer2 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $JobTitle2=$row['JobTitle2'];
                $Employer2=$row['Employer2'];
                // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $JobTitle2;
              echo "/";
              echo $Employer2;
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Start_Date2,End_Date2 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Start_Date2=$row['Start_Date2'];
                $End_Date2=$row['End_Date2'];
                // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $Start_Date2;
              echo "/";
              echo $End_Date2;
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </h6>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT City_Job2 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $City_Job2=$row['City_Job2'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo "City:";
              echo $City_Job2;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT JobTitle3,Employer3 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $JobTitle3=$row['JobTitle3'];
                $Employer3=$row['Employer3'];
                // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }

               echo $JobTitle3;
               echo "/";
               echo $Employer3;
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Start_Date3,End_Date3 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Start_Date3=$row['Start_Date3'];
                $End_Date3=$row['End_Date3'];
                // $check_passwo'/'rd=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $Start_Date3;
              echo "/";
              echo $End_Date3;
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </h6>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT City_Job3 FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $City_Job3=$row['City_Job3'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo "City:";
              echo $City_Job3;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
           </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT College_Name FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $College_Name=$row['College_Name'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $College_Name;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Year_Of_Completion_Degree_X FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Year_Of_Completion_Degree_X=$row['Year_Of_Completion_Degree_X'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $Year_Of_Completion_Degree_X;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </h6>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Percentage_Degree FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Percentage_Degree=$row['Percentage_Degree'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo "Percentage:";
              echo $Percentage_Degree;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT School_Name_XII FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $School_Name_XII=$row['School_Name_XII'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $School_Name_XII;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Year_Of_Completion_XII FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Year_Of_Completion_XII=$row['Year_Of_Completion_XII'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $Year_Of_Completion_XII;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </h6>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Percentage_XII FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Percentage_XII=$row['Percentage_XII'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo "Percentage:";
              echo $Percentage_XII;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT School_Name_X FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $School_Name_X=$row['School_Name_X'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $School_Name_X;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Year_Of_Completion_X FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Year_Of_Completion_X=$row['Year_Of_Completion_X'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo $Year_Of_Completion_X;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </h6>
          <p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";

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
              $q = " SELECT Percentage_X FROM $user; ";
              $result = mysqli_query($conn,"$q");
              while ($row=mysqli_fetch_assoc($result))
              {
                // code...
                $Percentage_X=$row['Percentage_X'];
                // $End_Date1=$row['End_Date1'];
                // // $check_password=$row['password'];
                //  $check_password=$row['password'];
              }
              echo "Percentage:";
              echo $Percentage_X;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?>
          </p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

</body>
</html>
