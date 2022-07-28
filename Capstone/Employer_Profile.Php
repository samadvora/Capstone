<?php 
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "kwcjobs";
 $con = mysqli_connect($servername, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{


$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$City = $_POST['City'];
$Province = $_POST['Province'];
$Postal_Code = $_POST['Postal_Code'];
$Strength = $_POST['Strength'];



// database insert SQL code
$sql = "INSERT INTO `kwcj_employers`(`Name`, `Description`, `City`, `Province`, `Postal_Code`, `Strength`, `Email`, `Phone_Number`) VALUES ('$Name','$Description','$City','$Province','$Postal_Code','$Strength','$Email','$Phone')";
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
    <title>KWC-Employee_Profile</title>
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
          <legend>Employer Profile</legend>
          <label for="Name">First Name:</label>
          <input
            type="text"
            name="Name"
            id="Name"
            class="inputbox"
            required
          />
          <label for="Description">Description:</label>
          <textarea id="Description" name="Description" rows="4" cols="50" class="inputbox" required></textarea>
          <label for="City">City:</label>
          <input
            type="text"
            name="City"
            id="City"
            class="inputbox"
            required
          />
          <label for="Province">Province:</label>
          <input
            type="text"
            name="Province"
            id="Province"
            class="inputbox"
            required
          />

          <label for="Postal_Code">Postal_Code:</label>
          <input
            type="text"
            name="Postal_Code"
            id="Postal_Code"
            class="inputbox"
            required
          />
          <label for="Strength">Strength:</label>
          <input
            type="text"
            name="Strength"
            id="Strength"
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
