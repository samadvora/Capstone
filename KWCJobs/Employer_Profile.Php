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
