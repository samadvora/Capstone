<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>KWC Jobs</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <li><a href="Index.php" class="current-page">Home</a></li>
              <li><a href="Employer_Profile.php">Profile</a></li>
              <li><a href="jobposting.php">Post A Job</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <?php

  ?>

  <main>
      <form id="form2" method="POST" name="form" action="submit.php" style="margin-top:150px;">
          <legend style="padding-top:50px;">Job Posting</legend>
          <label for="role">Job Role:</label>
          <input type="text" name="role" id="role" class="inputbox" required/>

          <label for="jobtype">Job Type:</label>
          <select name="jobtype" style="padding-bottom:15px; padding-top:15px; margin-top:20px; margin-right:80px; border-radius: 5px; border: 1px 1px #002934; width: 50%;">
          <option value="none">Please Select</option>
          <option value="1">Full-Time</option>
          <option value="2">Internship</option>
          <option value="3">Part-Time</option>
          <option value="4">Freelance</option>
         </select>

          <label for="salary">Salary:</label>
          <input type="text" name="salary" id="salary" class="inputbox" required/>
          <label for="description">Job Description:</label>
          <textarea rows="20" cols="50" name="description"></textarea>
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
