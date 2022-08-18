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

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
            
  <link rel="stylesheet" href="style.css">
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
              <li><a href="Student_Profile.php">Profile</a></li>
              <li><a href="jobapply.php">Apply for Jobs</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <main>

      <form id="form2" method="POST" name="form" action="Student_Profile.php">
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
          <br><br>
          <select name="Gender_ID" class="inputbox" style="height:37px; width: 50%; margin-left:34%;">
          <option value="none" selected >Gender</option>
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
