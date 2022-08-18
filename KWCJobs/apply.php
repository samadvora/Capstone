<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
  <title>KWC Jobs</title>
   <style>
    .fa {
      padding: 10px;
      font-size: 20px;
      width: 18%;
      height:55%;
      text-align: center;
      text-decoration: none;
      margin: 12px 5px;
      border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }


    .fa-linkedin {
      background: #007bb5;
      color: white;
    }

    .fa-youtube {
      background: #bb0000;
      color: white;
    }


    </style>
</head>

 <!-- Header -->
 <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="Index.php">
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

<?php 

$jobPostingId = 1;
$studentId = 1;
$salary = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  require('mysqli_connect.php');

    $q = "INSERT INTO KWCJ_Job_Applications (Job_Posting_ID, Student_ID, Job_Application_Status_ID, Job_Application_Flg) VALUES ($jobPostingId, $studentId, 1, 1)";
		$r = @mysqli_query($xyz, $q);

    $q1 = "UPDATE KWCJ_Job_Posting SET No_Of_Applicants = No_Of_Applicants + 1 WHERE ID = $jobPostingId";
		$r1 = @mysqli_query($xyz, $q1);

    if ($r) { 

			echo '<h1 class="section-title">Thank you for your <span>Application!</span></h1><br><br><br>';

		} else { 

			echo '<h1>System Error</h1>
			<p class="error">Sorry! Error while posting Job.</p>';

			echo '<p>' . mysqli_error($xyz) . '<br><br>Query: ' . $q . '</p>';

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
          <div class="social-icon">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>

                </div>
          
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