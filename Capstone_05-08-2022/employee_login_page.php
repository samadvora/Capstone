<?php 

    require('mysqli_connect_dinesh.php');

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


        $sql = "SELECT * FROM kwcj_employer_registration WHERE username = ? AND password = ?"; 

        $stmt = $mysqli->prepare($sql); 

        $stmt->bind_param("ss", $_POST['username'], $_POST['password']);

        $stmt->execute();

    
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {

            header("Location: login_employee_welcome.php"); 
        }

        elseif(mysqli_stmt_num_rows($stmt) == 0) {

          $Error= "<h2>Incorrect account information. Please try again!</h2>"; 

        }

        else{

          header("Location: employee_login_page.php");

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
    <title>Employee Login Page</title>
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
      <form id="form1" method="POST" name="form"  action="employee_login_page.php" >
        <fieldset>
          <legend>Employee Login Form</legend>
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
              /><br><br>
              <span style="color:red;"><?php if (isset($Error)) echo $Error ?></span>
            <p>New user? <a href="#form2"> Register</a></p>
          </div>
        </fieldset>
        <div class="buttons">
          <input type="submit" value="Submit" class="press" id="submit1" />
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
