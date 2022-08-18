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
