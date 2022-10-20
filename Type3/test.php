<?php
session_start();
$user=$_SESSION['user_name'];
$folder=$_SESSION['folder'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="css/red.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="images/<?php echo "$folder"; ?>" alt="John Smith" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">
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
							<br />
            </h1>
            <ul>
              <li class="ad" style="margin-bottom:10px;">
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
								<br>
								<br>
							</li>
              <li class="mail"><?php
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
	          ?></li>
						<br>
              <li class="tel">
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
							</li>

            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="images/icn-contact.jpg" alt="" /></a></li>
              </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
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
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUCATION</h2>
          <div class="content">
            <h3>
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
						</h3>
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
							 <br />
              <em>
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
							</em></p>
          </div>
          <div class="content">
            <h3>
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
						</h3>
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
							 <br />
              <em>
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
							</em></p>
          </div>
					<div class="content">
            <h3>
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
						</h3>
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
							 <br />
              <em>
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
							</em></p>
          </div>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>EXPERIENCE</h2>
          <div class="content">
            <h3>
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
						</h3>
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
								echo "\n";
								echo "$Employer1";

								// echo "<p>";
								// echo $check_password;
								// echo "</p>";
							}
							?>
						</p>
            <ul class="info">
              <li>
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
							</li>
            </ul>
          </div>
          <div class="content">
            <h3>
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
						</h3>
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
								echo "\n";
								echo "$Employer2";

								// echo "<p>";
								// echo $check_password;
								// echo "</p>";
							}
							?>
						</p>
            <ul class="info">
              <li>
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
							</li>
            </ul>
          </div>
					<div class="content">
						<h3>
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
						</h3>
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
								echo "\n";
								echo "$Employer3";

								// echo "<p>";
								// echo $check_password;
								// echo "</p>";
							}
							?>
						</p>
						<ul class="info">
							<li>
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
							 </li>
						</ul>
					</div>
        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">

            <ul class="skills">
              <li>
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
							</li>
              <li>
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
							</li>
              <li>
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
							</li>
              <li>
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
							</li>
              <li>
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
							</li>
            </ul>
          </div>
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
