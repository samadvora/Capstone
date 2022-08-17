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
  <h1 class="section-title"></h1><br><br><br>;

  <?php
    
    require('mysqli_connect.php'); 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
        $username = mysqli_real_escape_string($xyz, trim($_POST['username']));
        $password = mysqli_real_escape_string($xyz, trim($_POST['password']));
        $psw=md5($password);


        if (empty($username)) { echo "Username is required!!"; }
        if (empty($password)) { echo "Password is required!!"; }

        $user_check_query = "SELECT * FROM kwcj_students_registration WHERE username='$username' LIMIT 1";
        $result = @mysqli_query($xyz, $user_check_query);
        $user = @mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          echo "\nUsername already exists!!";
          }
        else
        {
          $q = "INSERT into kwcj_students_registration(Student_ID, Username, Password) Values (0 , '$username', '$psw')";
          $r = @mysqli_query($xyz, $q); 
          
          if ($r) { 

            echo '<h1 class="section-title">Student Registered <span>Successfully!</span></h1><br><br><br>';
      
          } else { 
      
            echo '<h1>System Error</h1>
            <p class="error">Sorry! Error while posting Job.</p>';
      
            echo '<p>' . mysqli_error($xyz) . '<br><br>Query: ' . $q . '</p>';
      
          } 
        }
    }
  ?>
  <main>
    <form id="form2" method="POST" name="form" action="student_registration.php" style="margin-top:150px;">
          <legend style="padding-top:50px;">Student Registration</legend>
          <label for="username">UserName:</label>
          <input type="text" name="username" id="username" class="inputbox" required/>
          <label for="password">Password:</label>
          <input type="text" name="password" id="password" class="inputbox" required/>
          
        </fieldset><br><br><br>
        <div class="buttons">
          <input type="submit" value="Submit" class="press" id="submit2" />
          <input type="submit" value="Reset" class="press" id="reset2" />
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
