<?php
session_start();
$user=$_SESSION['user_name'];
$folder=$_SESSION['folder'];
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <meta name="description" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Curriculum Vitae.</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Education</a></li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/<?php echo "$folder"; ?>" alt="Image"/></a></div>
          <div class="h2 title">
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
            ?>
          </div>
          <!-- <p class="category text-white">Web Developer, Graphic Designer,  Photographer</p><a class="btn btn-primary" href="javascript:window.print()" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a> -->
          <a class="btn btn-primary aos-init aos-animate" href="javascript:window.print()" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Objective</div>
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
            </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">
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
                ?>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">
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
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">
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
              ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">
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
            </span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><p>
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
            </p></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><p>
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
            </p></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><p>
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
            </p></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><p>
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
              $q = " SELECT Skills5 FROM $user; ";
               $result = mysqli_query($conn,"$q");
            while ($row=mysqli_fetch_assoc($result))
            {
              // code...
              $Skills5=$row['Skills5'];
                  // $check_password=$row['password'];
            //  $check_password=$row['password'];
            }
            echo $Skills5;
            // echo "</p>";
            // echo "<p>";
            // echo $check_password;
            // echo "</p>";
            }
            ?>
            </p></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<d
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
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
                echo "-";
                echo $End_Date1;
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </p>
            <div class="h5">
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
                $q = " SELECT Employer1 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  // $JobTitle1=$row['JobTitle1'];
                  $Employer1=$row['Employer1'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }

                      echo "$Employer1";

                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">
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
                $q = " SELECT JobTitle1 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  $JobTitle1=$row['JobTitle1'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }

                echo $JobTitle1;
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
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
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
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
                echo "-";
                echo $End_Date2;
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </p>
            <div class="h5">
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
                $q = " SELECT Employer2 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  // $JobTitle1=$row['JobTitle1'];
                  $Employer2=$row['Employer2'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }

                      echo "$Employer2";

                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">
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
                $q = " SELECT JobTitle2 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  $JobTitle2=$row['JobTitle2'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }

                echo $JobTitle2;
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
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
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
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
                $q = " SELECT Start_Date3,End_Date3 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  $Start_Date3=$row['Start_Date3'];
                  $End_Date3=$row['End_Date3'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }
                echo $Start_Date3;
                echo "-";
                echo $End_Date3;
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </p>
            <div class="h5">
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
                $q = " SELECT Employer3 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  // $JobTitle1=$row['JobTitle1'];
                  $Employer3=$row['Employer3'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }

                      echo "$Employer3";

                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">
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
                $q = " SELECT JobTitle3 FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  $JobTitle3=$row['JobTitle3'];
                  // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }

                echo $JobTitle3;
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
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
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" name="education" >
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
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
                echo "Year Of Completion:";
                echo $Year_Of_Completion_Degree_X;
                // echo "</p>";
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </p>
            <div class="h5">Diploma/Degree</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">
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
                $q = " SELECT Field_Of_Study FROM $user; ";
                $result = mysqli_query($conn,"$q");
                while ($row=mysqli_fetch_assoc($result))
                {
                  // code...
                  $Field_Of_Study=$row['Field_Of_Study'];
                  // $End_Date1=$row['End_Date1'];
                  // // $check_password=$row['password'];
                  //  $check_password=$row['password'];
                }
                echo $Field_Of_Study;
                // echo "</p>";
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </div>
            <p class="category">
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
            </p>
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
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php
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
              echo "Year Of Completion:";
              echo $Year_Of_Completion_XII;
              // echo "</p>";
              // echo "<p>";
              // echo $check_password;
              // echo "</p>";
            }
            ?></p>
            <div class="h5">XII(Senior Secondary)</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <p class="category">
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
            </p>
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
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
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
                echo "Year Of Completion:";
                echo $Year_Of_Completion_X;
                // echo "</p>";
                // echo "<p>";
                // echo $check_password;
                // echo "</p>";
              }
              ?>
            </p>
            <div class="h5">X(Secondary)</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <p class="category">
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
            </p>
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
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
    <footer class="footer">
      <div class="h4 title text-center">@Copyrights Reserved </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
