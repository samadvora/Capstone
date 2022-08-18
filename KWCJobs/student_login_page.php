    <?php
   session_start();
   ?>
<?php
   if(isset($_POST['submit'])){
   $username= $_POST['username'];
   $password= $_POST['password'];
   $psw= md5($password);
   if(empty($usrename) && empty($password))
   {
      echo '<script>alert("Please enter Both the fields")</script>';
   }
   else{
      
      include "mysqli_connect.php";
      $query="SELECT * from kwcj_students_registration where Username='$username' AND Password='$psw'";
      $result= mysqli_query($xyz,$query);
   
      if(mysqli_num_rows($result)==1){
            header('location:Student_home.php');
   
      }
      
      else{
          $Error= "<h2>Incorrect account information. Please try again!</h2>"; 
         
      }
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
    <link rel="icon" type="image/ico" href="images/favicon.png" />
    <title>Student Login Page</title>
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
  <body>
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
          <li><a href="Index.php" class="current-page">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
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
              <span style="color:red;"><?php if (isset($Error)) echo $Error ?></span>
            <p>New user? <a href="student_registration.php"> Register</a></p>
            <span style="color:red;"><?php if (isset($Error)) echo $Error ?></span>
            <p><a onclick="location='Verification.php'"> Forgot Password ? </a></p>
          </div>
        </fieldset>
        <div class="buttons">
          <input type="submit" value="Submit" name="submit" class="press" id="submit1" />
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
