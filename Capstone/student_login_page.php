<?php 

    require('mysqli_connect.php');

    //Check if the server data has been posted using $_SERVER[‘REQUEST_METHOD’]

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //check if the username and password are both set
        
        // if (empty($_POST['username'])) {

        //     $usernameError = 'Username should be filled';

        // } else {

        //     $username = trim(htmlspecialchars($_POST['username']));

        // }

        
        // if (empty($_POST['password'])) {

        //     $passwordError = 'Password should be filled';

        // } else {

        //     $password = trim(htmlspecialchars($_POST['password']));

        // }


        $sql = "select * FROM kwcj_students_registration WHERE username = ? AND password = ?"; 

        $stmt = $mysqli->prepare($sql); 

        $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

        $stmt->execute();

    
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {

            header("Location: login_student_welcome.php"); 
        }

        else {

            

            echo "Incorrect account information. Please try again!";

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
    <link rel="icon" type="image/ico" href="images/favicon.png" />
    <title>CricInfo</title>
  </head>
  <body>
    <!-- Header -->
   <section id="header">
      <div class="header container">
      <h1><span>K</span>WC <span>J</span>obs</h1>

        <div class="nav-bar">
             <div class="logo-image">
            <img src="images/logo.png" class="img-fluid">
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
           
              <!-- Student View -->
              <li><a href="index.php" class="current-page">Home</a></li>
              <li><a href="news.php">Profile</a></li>
              <li><a href="schedule.php">Job Postings</a></li>
              <li><a href="rankings.php">Applied Jobs</a></li>
              <li><a href="login.php">About</a></li>
              <li><a href="login.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <main>
      <form id="form1" method="POST" name="form"  action="student_login_page.php" >
        <fieldset>
          <legend>Student Login Form</legend>
          <div id="signin">
            <label for="myEmail" class="email">Username:</label>
            <input
              type="text"
              name="username"
              id="myEmail"
              class="inputbox email"
              required
              value="<?php if (isset($username)) echo $username; ?>"
            />
            <!-- <span class="error"><?php if (isset($usernameError)) echo $usernameError ?></span><br><br> -->
            <label for="password" class="password">Password:</label>
            <input
              type="password"
              name="password"
              id="pwd"
              class="inputbox password"
              required
              value="<?php if (isset($password)) echo $password; ?>"
              />
              <!-- <span class="error"><?php if (isset($passwordError)) echo $passwordError ?></span><br><br> -->
            <p>New user? <a href="#form2"> Register</a></p>
          </div>
        </fieldset>
        <div class="buttons">
          <input type="submit" value="Submit" class="press" id="submit1" />
          <input type="submit" value="Reset" class="press" id="reset2" />
        </div>
      </form>

     
    </main>
    <!-- Footer -->
    <section id="footer">
      <!-- address section starts -->
      <div id="address">
        <p>
          <a href="https://goo.gl/maps/1Fb829PhMAdtYmsv5" target="_blank">
            <img src="images/map.png" alt="Google Map location logo" />
            133 Steepleridge St, <br />Kitchener, ON N2P 2W2
          </a>
        </p>
        <p>
          <a href="tel:+15483332823">
            <img src="images/phone-call.png" alt="Google Map location logo" />
            +1 (548)-333-2823
          </a>
        </p>
      </div>
      <!-- address section ends -->

      <!-- middle footer-section starts -->
      <div id="middle-section" class="footer container">
        <div class="brand">
          <h1><span>C</span>ric <span>I</span>nfo</h1>
        </div>
        <h2>Your Daily Dose of Cricket.</h2>
        <p class="desktop-view">
          <a href="privacy.html">Privacy</a> |
          <a href="terms.html">Terms & Conditions</a> |
          <a href="contact.html">Contact</a> |
          <a href="mailto:support@cricinfo.com">Support</a><br />
          &nbsp;&nbsp;&nbsp;Copyright © 2021 CricInfo. All rights reserved.
        </p>
        <p class="mobile-view">
          <a href="privacy.html">Privacy</a><br />
          <a href="terms.html">Terms & Conditions</a><br />
          <a href="contact.html">Contact</a><br />
          <a href="mailto:support@cricinfo.com">Support</a><br />
        </p>
      </div>
      <!-- middle footer-section ends -->

      <!-- social media starts -->
      <div id="social-media">
        <p>Connect with Us:</p>
        <!-- The icons are used from Flaticon site and are loyalty free (https://www.flaticon.com/) -->
        <section>
          <a
            href="https://www.youtube.com/channel/UCAifbTXTTjrdFBRQetLV2Yw"
            target="_blank"
            ><img src="images/youtube.png" alt="YouTube logo"
          /></a>
          <a href="https://www.facebook.com/Yash.Marakna/" target="_blank"
            ><img src="images/facebook.png" alt="Facebook logo"
          /></a>
          <a href="https://www.instagram.com/yash_marakna/" target="_blank"
            ><img src="images/instagram.png" alt="Instagram logo"
          /></a>
          <a
            href="https://web.whatsapp.com/send?phone=15483332823&text=I want to connect with you"
            target="_blank"
            ><img src="images/whatsapp.png" alt="WhatsApp logo"
          /></a>
        </section>
        <p class="mobile-view">
          Copyright © 2022 KWC-JOBS. All rights reserved
        </p>
      </div>

      <!-- social media ends -->
    </section>
    <!-- End Footer -->
    <script src="./app.js"></script>
  </body>
</html>
