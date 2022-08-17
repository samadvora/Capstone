<?php
include "mysqli_connect.php";
if(isset($_POST['submit']))
{
$newpass=$_POST["pass"];
$newpass=md5($newpass);
$email=$_GET['username'];
$Changepass=mysqli_query($xyz,"UPDATE kwcj_employer_registration SET  Password='".$newpass."' WHERE username='".$email."'");
	if($Changepass)
	{
		$Error="<h1>Your password has been changed</h1>";
		header('Refresh:2;url=employee_login_page.php');
	}
	else{
		$Error2=" <h1> Password not changed<h1>";
	}
} 
 ?>
<!DOCTYPE html>
<html lang="en">
  <!-- Head -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <!-- <link rel="stylesheet" href="./style1.css"> -->
    <link rel="icon" type="image/ico" href="images/favicon.png" />
    <title>Username Verification</title>
  </head>
  <body>
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
    <main>
      <form id="form1" method="POST" name="form"  action="" >
        <fieldset>
          <legend>Change Your Password</legend>
          <div id="signin">
            <label for="pass" class="username">Enter new password:</label>
            <input
              type="password"
              name="pass"
              id="pwd"
              class="inputbox password"
              required />
              <br><br>
              <span style="color:green;"><?php if (isset($Error)) echo $Error ?></span>

          </div>
        </fieldset>
        <div class="buttons">
        <input type="submit" value="Change It" class="press" name="submit" id="submit1" />

        </div>

      </form>

     
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