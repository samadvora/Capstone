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
  <!-- End Header -->

  <section id="contact">
  <div class="contact container">

<?php 

$eId = '';
$role = '';
$salary = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  require('mysqli_connect.php');

  $eId = 1;

	if (empty($_POST['role'])) {
		$roleError = 'Please enter the Role.';
	} else {
		$role = mysqli_real_escape_string($xyz, $_POST['role']);
	}

  if (empty($_POST['salary'])) {
		$salaryError = 'Please enter the Salary.';
	} else {
    $salary = mysqli_real_escape_string($xyz, $_POST['salary']);
	}

	if (empty($_POST['description'])) {
		$descriptionError = 'Please enter the Job Description.';
	} else {
    $description = mysqli_real_escape_string($xyz, $_POST['description']);
	}

  if (empty($_POST['jobtype'])) {
		$jobTypeError = 'Please enter the Job Type.';
	} else {
    $jobType = mysqli_real_escape_string($xyz, $_POST['jobtype']);
	}

  if(empty($roleError) && empty($salaryError) && empty($descriptionError)) {

    $q = "INSERT INTO KWCJ_Job_Posting (Employer_ID, Job_Posting_Status_ID, Job_Role, Description, No_Of_Applicants, Salary, Job_Type_ID) VALUES ($eId, 1 , '$role', '$description', 0, '$salary', $jobType)";
		$r = @mysqli_query($xyz, $q);

    if ($r) { 

			echo '<h1 class="section-title">Job Posted <span>Successfully!</span></h1><br><br><br>';

		} else { 

			echo '<h1>System Error</h1>
			<p class="error">Sorry! Error while posting Job.</p>';

			echo '<p>' . mysqli_error($xyz) . '<br><br>Query: ' . $q . '</p>';

		} 
  }
}

?>

</div>
</section>

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