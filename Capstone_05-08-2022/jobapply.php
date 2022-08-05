<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>KWC Jobs</title>
</head>

 <!-- Header -->
 <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="index.html">
              <h1 style="
    font-size: 3rem;
    text-transform: uppercase;
    color: white;"><span style="color:#00b1e5;">K</span>WC <span style="color:#00b1e5;">J</span>OBS</h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li><a href="index.html" class="current-page">Home</a></li>
              <li><a href="news.php">Profile</a></li>
              <li><a href="schedule.php">Job Posts</a></li>
              <li><a href="rankings.php">Applied Jobs</a></li>
              <li><a href="login.php">About</a></li>
              <li><a href="login.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  <section id="contact">
  <div class="contact container">
    <div>
      <h1 style="margin-top: -200px;" class="section-title">List of <span>Jobs</span></h1>
    </div>

    </div>
</section>
  <?php

require('mysqli_connect.php');

// Define the query:
$q = "SELECT KJP.Employer_ID, KE.Name, KJPS.Description AS Job_Status, KJP.Job_Type_ID, KJP.Job_Role, KJP.Description , KJP.No_Of_Applicants, KJP.Salary
FROM KWCJ_Job_Posting KJP
INNER JOIN KWCJ_Employers KE ON KE.ID = KJP.Employer_ID
INNER JOIN KWCJ_Job_Posting_Status KJPS ON KJPS.ID = KJP.Job_Posting_Status_ID";
$r = @mysqli_query($xyz, $q); 

foreach($r as $job)
{
    $id = $job['Employer_ID'];
    $employer = $job['Name'];
    $jobStatus = $job['Job_Status'];
    $jobType = $job['Job_Type_ID'];
    $jobRole = $job['Job_Role'];
    $description = $job['Description'];
    $applicants = $job['No_Of_Applicants'];
    $salary = $job['Salary'];

    // Define the query:
    $q = "SELECT KJP.Employer_ID, KE.Name, KJPS.Description AS Job_Status, KJP.Job_Type_ID, KJP.Job_Role, KJP.Description , KJP.No_Of_Applicants, KJP.Salary
    FROM KWCJ_Job_Posting KJP
    INNER JOIN KWCJ_Employers KE ON KE.ID = KJP.Employer_ID
    INNER JOIN KWCJ_Job_Posting_Status KJPS ON KJPS.ID = KJP.Job_Posting_Status_ID";
    $r = @mysqli_query($xyz, $q); 

?>

<div class = "books">

      <form id="form2" method="POST" name="form" action="apply.php" style="margin-top:-450px;">

        <br><br><h1 style="color: white; font-size: 30px; text-align: center;"><?php echo $jobRole; ?></h1>
        <br><h1 style="color: white; font-size: 30px; text-align: center;"><?php echo $employer; ?> &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $jobStatus; ?></h1><br>
        <br><h1 style="color: white;font-size: 30px; text-align: center;">No of Applicants: <?php echo $applicants; ?></h1><br>
        <br><h1 style="color: white; font-size: 30px; text-align: center;"><?php echo $salary; ?></h1><br>
        <br><h3 style="color: white; font-size: 20px; padding-left:300px; padding-right:300px; text-align: center;"><?php echo $description; ?></h3><br>

        </fieldset><br><br><br>
        <div class="buttons">
          <input type="submit" value="Apply" class="press" id="submit2" />
        </div>
      </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        
        <!-- <?php echo $id;?><button style="color: blue; margin-left: 750px;" class = "button" type = "button" action="apply.php"> Apply To this Job</button><br><br><br><hr> -->
    </div>
  
<?php
} 
?>

  <main>
      <!-- <form id="form2" method="POST" name="form" action="apply.php" style="margin-top:150px;">
          <legend style="padding-top:50px;">Jobs</legend>
        </fieldset><br><br><br>
        <div class="buttons">
          <input type="submit" value="Apply" class="press" id="submit2" />
        </div>
      </form> -->
    </main>

</body>
<!-- Footer -->
<section id="footer">
        <div class="footer container">
          <div class="brand">
            <h2><span>R</span>ESOURCES</h2><br>
          </div>
          <ul style="list-style: none;margin-left:10px;">
            <li><p>Help And Support</p></li>
            <li><p>Success Stories</p></li>
            <li><p>Our Reviews</p></li>
            <li><p>Blogs</p></li>
            <li><p>NewsLetters</p></li>
            
            
          </ul>

          </div>
            
        </div>
        <div class="footer container">
          <div class="brand">
            <h2><span>C</span>ONNECT WITH <span>U</span>S</h2><br>
          </div>
          <!-- <div class="social-icon">
            <div class="social-item">
              <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
            </div>
            <div class="social-item">
              <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
            </div>
            <div class="social-item">
              <a href="#"><img src="https://img.icons8.com/bubbles/452/twitter-circled.png" /></a>
            </div>
            <div class="social-item">
              <a href="#"><img src="https://img.icons8.com/bubbles/344/whatsapp.png" /></a>
            </div>
          </div> -->
          
          <p style="margin-top:60px;">
                    Copyright © 2022 KWC-JOBS. All rights reserved
                  </p>
        </div>
        <div class="footer container">
          <div class="brand">
              <h2><span>G</span>ET <span>I</span>N<span> T</span>OUCH</h2><br>
            <p style="text-align:left; margin-left:10px;"> 74th William Street West, <br>
                Waterloo, 
              Ontario, <br>
              Canada, <br>
            N2L-1J7 <br>
          Ph - 555-5555-555</p>

          </div>
      <br>
          
    
          
      </section>
      <!-- End Footer -->
</html>
