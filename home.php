<?php
session_start();
$username=$_SESSION['user'];
$_SESSION['user_name']=$username;
$_SESSION['uploadfile']="uploadfile";
$_SESSION['uploadfilesub']="uploadfilesub";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>FORM</title>
  <style media="screen">
    .A {
  font-family: "Roboto Slab",serif;
  font-size: 26px;
  color: #277fd9;
  line-height: 1.5;
  margin-bottom: 5px;
  font-weight: 300;
      }
      .A1 {
    font-family: "Roboto Slab",serif;
    font-size: 18px;
    color: #277fd9;
    line-height: 1.5;
    margin-bottom: 5px;
        }
        .A2 {
      font-family: "Roboto Slab",serif;
      font-size: 26px;
      color:white;
      font-weight: 300;
      float: left;
      padding-top: 20px;
      padding-left: 600px;
          }
          textarea {
              width: 400px;
              /* margin-left: 300px; */
              margin-top: 5px;
              height: 250px;
              border: 2px solid #277fd9;
              border-radius: 20px;
              resize: none;
          }
    .B
    {
      width: 400px;
      height: auto;
      border: 2px solid #277fd9;
      border-radius: 20px;
      padding-left: 30px;
      padding-top: 10px;
    }
  </style>
</head>

  <body>
    <div style="height:100px;width:1520px;background-color: #277fd9;display:inline-block;">
      <h1 class="A2">Welcome User <?php echo $_SESSION['user']; ?></h1>
      <a href="logout.php" style="float:right;color: white; padding-top: 35px;font-size: 20px;padding-right:20px;">LOGOUT</a>
    </div>
        <div style="margin-left:450px;width:900px;height:auto;">
      <form method="POST" action="resume.php" enctype="multipart/form-data">
                    <div style="margin-top:20px;">
                       <div >
                         <h1 class="A">What’s the best way for employers to contact you?</h1>
                         <p>We suggest including an email and phone number.</p>
                       </div>
                    </div>
                    <div >
                        <label>First Name:</label>
                        <input type="text" name="fname" placeholder="" maxlength="35" style="margin-left:36px;" required >
                    </div>
                    <br>
                    <div>
                      <label>Last Name:</label>
                      <input type="text" name="lname" placeholder="" maxlength="35" style="margin-left:38px;" required >
                    </div>
                    <br>
                    <div>
                      <label>Street Address:</label>
                      <input type="text" name="StAddr"placeholder=""  maxlength="255" style="margin-left:15px;" required>
                    </div>
                    <br>
                    <div>
                      <label>City:</label>
                      <input type="text" name="city" placeholder="" maxlength="100"  style="margin-left:80px;" required>
                    </div>
                    <br>
                    <div>
                      <label>Zip Code:</label>
                      <input type="text" name="zip" placeholder="" maxlength="10"  style="margin-left:48px;" required>
                    </div>
                    <br>
                    <div>
                      <label>Phone:</label>
                      <input type="tel" name="phoneno" placeholder="" maxlength="14"  style="margin-left:68px;" required>
                    </div>
                    <br>
                    <div>
                      <label>Email Address:</label>
                      <input type="text" name="email" placeholder="" maxlength="50"  style="margin-left:13px;" required>
                    </div>
                    <br>
                    <br>
                    <div>
                      <h1 class="A">Tell us about your Objective</h1>
                     <textarea name="objective" rows="6" cols="30" required></textarea>
                    </div>
                    <div>
                      <h1 class="A">Tell us about your work experience</h1>
                      <p>Start with your most recent job and work backward.</p>
                    </div>
                    <div class="B">
                        <div>
                              <label>Job Title:</label>
                              <input type="text" name="Jtitle1" maxlength="50" style="margin-left:57px;" required>
                        </div>
                        <br>
                        <div>
                            <label>Employer:</label>
                            <input type="text" name="Emp1" maxlength="50" style="margin-left:49px;" required >
                        </div>
                        <br>
                        <div>
                            <label>City:</label>
                            <input type="text" name="Jcity1" placeholder="" maxlength="100" style="margin-left:85px;" required>
                        </div>
                        <br>
                        <div>
                            <label>Start Date:</label>
                            <input type="date" name="Sdate1" placeholder="Select" maxlength="7" style="margin-left:48px;" required>
                        </div>
                        <br>
                        <div>
                             <label>End Date:</label>
                             <input type="date" name="Edate1" placeholder="Select" maxlength="7"style="margin-left:52px;" required>
                        </div>
                        <br>
                  </div>
                  <br><br>
                  <div class="B">
                      <div>
                          <label>Job Title:</label>
                          <input type="text" name="Jtitle2" maxlength="50" style="margin-left:57px;" required>
                      </div>
                      <br>
                      <div>
                          <label>Employer:</label>
                          <input type="text" name="Emp2" maxlength="50" style="margin-left:49px;" required>
                      </div>
                      <br>
                      <div>
                          <label>City:</label>
                          <input type="text" name="Jcity2" placeholder="" maxlength="100" style="margin-left:85px;" required>
                      </div>
                      <br>
                      <div>
                          <label>Start Date:</label>
                          <input type="date" name="Sdate2" placeholder="Select" maxlength="7" style="margin-left:48px;" required>
                      </div>
                      <br>
                      <div>
                          <label>End Date:</label>
                          <input type="date" name="Edate2" placeholder="Select" maxlength="7"style="margin-left:52px;" required>
                      </div>
                      <br>
                </div>
                <br><br>
                <div class="B">
                      <div>
                            <label>Job Title:</label>
                            <input type="text" name="Jtitle3" maxlength="50" style="margin-left:57px;" required>
                      </div>
                      <br>
                      <div>
                            <label>Employer:</label>
                            <input type="text" name="Emp3" maxlength="50" style="margin-left:49px;" required>
                      </div>
                      <br>
                      <div>
                            <label>City:</label>
                            <input type="text" name="Jcity3" placeholder="" maxlength="100" style="margin-left:85px;" required>
                      </div>
                      <br>
                      <div>
                            <label>Start Date:</label>
                            <input type="date" name="Sdate3" placeholder="Select" maxlength="7" style="margin-left:48px;" required>
                      </div>
                      <br>
                      <div>
                          <label>End Date:</label>
                          <input type="date" name="Edate3" placeholder="Select" maxlength="7"style="margin-left:52px;" required>
                      </div>
                      <br>
               </div>

                  <div>
                      <h1 class="A">Tell us about your education</h1>
                      <p>Include every school, even if you're still there or didn't graduate.</p>
                    </div>

                    <div class="B">
                      <div>
                        <label class="A1">X (Secondary)</label>
                        <br>
                        <br>
                        <label>School Name</label>
                        <input type="text" placeholder=""  name="schoolX"  maxlength="50" value="" required>
                        <br>
                        <br>
                        <label>Year Of Completion</label>
                        <input type="date" placeholder="" name="YCX" maxlength="50" value="" required>
                        <br>
                        <br>
                        <label>Percentage</label>
                        <input type="number" placeholder=""  name="percentageX" min="0" max="100" value="" required>
                        <br><br>
                      </div>
                    </div>
                      <br>
                      <br>
                    <div class="B">
                      <div>
                        <label class="A1">XII (Senior Secondary)</label>
                        <br>
                        <br>
                        <label>School Name</label>
                        <input type="text" placeholder=""  name="schoolXII"  maxlength="50" value="" required>
                        <br>
                        <br>
                        <label>Year Of Completion</label>
                        <input type="date" placeholder="" name="YCXII" maxlength="50" value="" required>
                        <br>
                        <br>
                        <label>Percentage</label>
                        <input type="number" placeholder=""  name="percentageXII" min="0" max="100"  value="" required>
                        <br><br>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="B">
                      <div>
                          <label class="A1">Degree/Diploma</label>
                          <br>
                          <br>
                          <label>College Name</label>
                          <input type="text" placeholder=""  name="colname"  maxlength="50" value="" required>
                          <br>
                          <br>
                          <label>Field of Study</label>
                          <input type="text"   name="FOS" maxlength="50"  value="" required>
                          <br>
                          <br>
                          <label>Year Of Completion</label>
                          <input type="date" placeholder="" name="YC" maxlength="50" value="" required>
                          <br>
                          <br>
                          <label>Percentage</label>
                          <input type="number" placeholder=""  name="percentage_deg" min="0" max="100"  value="" required>
                          <br><br>
                    </div>
                    </div>

                  <div>
                      <h1 class="A">What skills do you want to highlight?</h1>
                      <p>Start by including languages you know the best.</p>
                      <input type="text" name="skill1" value="" required><br><br>
                      <input type="text" name="skill2" value="" required><br><br>
                      <input type="text" name="skill3" value="" required><br><br>
                      <input type="text" name="skill4" value="" required><br><br>
                      <input type="text" name="skill5" value="" required><br><br>
                </div>
                  <div>
                    <h1 class="A">Tell us about your Accomplishment.</h1>
                   <textarea name="accomplishment" rows="4" cols="30" required></textarea>
                  </div>
                  <div>
                    <h1 class="A">Tell us about your certifications.</h1>
                   <textarea name="certificate" rows="4" cols="30" required></textarea>
                  </div>
                  <div>
                    <h1 class="A">Tell us if you have any work samples.</h1>
                   <textarea name="worksample" rows="6" cols="30" required></textarea>
                  </div>
                  <br>
                  <br>
                  <input type="file" name="uploadfile" required>
                  <br><br>
                  <center><input type="submit" name="uploadfilesub" value="upload" ></center>
      </form>

<!--  -->
</body>
</html>
