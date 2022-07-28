<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "kwcjobs";
 $con = mysqli_connect($servername, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{


$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Date_Of_Birth = $_POST['Date_Of_Birth'];
$Education = $_POST['Education'];
$Gender_ID = $_POST['Gender_ID'];


// database insert SQL code
$sql = "INSERT INTO `kwcj_students` (`First_Name`, `Last_Name`, `Email`, `Phone`, `Date_Of_Birth`, `Education`, `Gender_ID`) VALUES ('$First_Name','$Last_Name','$Email','$Phone','$Date_Of_Birth','$Education','$Gender_ID')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
  echo " Records Inserted";
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
    <title>KWC-Student_Profile</title>
  </head>
  <body>
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

      <form id="form2" method="POST" name="form" action="Employer_Profile.php">
        <fieldset>
          <legend>Student Profile</legend>
          <label for="First_Name">First Name:</label>
          <input
            type="text"
            name="First_Name"
            id="First_Name"
            class="inputbox"
            required
          />
          <label for="Last_Name">Last Name:</label>
          <input
            type="text"
            name="Last_Name"
            id="Last_Name"
            class="inputbox"
            required
          />
          <label for="Email">Email:</label>
          <input
            type="Email"
            name="Email"
            id="Email"
            class="inputbox"
            required
          />
          <label for="Phone">Phone:</label>
          <input
            type="text"
            name="Phone"
            id="Phone"
            placeholder="999-999-9999"
            class="inputbox"
            required
          />
           <label for="Date_Of_Birth">Date_Of_Birth:</label>
          <input
            type="text"
            name="Date_Of_Birth"
            id="Date_Of_Birth"
            class="inputbox"
            required
          />
           <label for="Date_Of_Birth">Education:</label>
          <input
            type="text"
            name="Education"
            id="Education"
            class="inputbox"
            required
          />

          <select name="Gender_ID" class="inputbox" ;>
          <option value="none" selected class="inputbox">Gender</option>
          <option value="1" class="inputbox">Male</option>
          <option value="2" class="inputbox">Female</option>
         <option value="3" class="inputbox">Prefer not to Answer</option>
         </select>
        
          <label for="myfile">Upload Your Resume/CV:</label>
          <input type="file" id="myfile" name="myfile" class="inputbox"></li>
           <div class="buttons">
          <input type="submit" value="Submit" class="press" id="submit2" style="margin-left: 50%;" />
           <input type="submit" value="Reset" class="press" id="reset2" />
        </div>
        </fieldset>

        
       
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
