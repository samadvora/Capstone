<?php 
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "kwcjobs";
$con = mysqli_connect($servername, $username, $password, $dbname);

$employerId = 1;

$sql = "SELECT Name, Description AS Employer_Desc, City, Province, Postal_Code, Strength, Email, Phone_Number FROM KWCJ_EMPLOYERS WHERE ID = $employerId";
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_array($rs);

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

//SQL Query
$sql1 = "UPDATE KWCJ_EMPLOYERS SET Name = '$Name', Description = '$Description', Email = '$Email', Phone_Number = '$Phone', City = '$City', 
Province = '$Province', Postal_Code = $Postal_Code, Strength = $Strength WHERE ID = $employerId";

  //Update in Database
  $rs1 = mysqli_query($con, $sql1);
  if($rs1)
  {
    echo " Records Updated!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
      <!-- <link rel="stylesheet" href="./style1.css"> -->
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

      <form id="form2" method="POST" name="form" action="Edit_Employer_Profile.php">
        <fieldset>
          <legend>Edit Employer Profile</legend>
          <label for="Name">Employer Name:</label>
          <input
            type="text"
            name="Name"
            id="Name"
            class="inputbox"
            value='<?php echo $row['Name']; ?>'
            required
          />
          <label for="Description">Description:</label>
          <textarea id="Description" name="Description" rows="4" cols="50" class="inputbox" required><?php echo $row['Employer_Desc']; ?></textarea>
          <label for="City">City:</label>
          <input
            type="text"
            name="City"
            id="City"
            class="inputbox"
            value='<?php echo $row['City']; ?>'
            required
          />
          <label for="Province">Province:</label>
          <input
            type="text"
            name="Province"
            id="Province"
            class="inputbox"
            value='<?php echo $row['Province']; ?>'
            required
          />

          <label for="Postal_Code">Postal_Code:</label>
          <input
            type="text"
            name="Postal_Code"
            id="Postal_Code"
            class="inputbox"
            value='<?php echo $row['Postal_Code']; ?>'
            required
          />
          <label for="Strength">Strength:</label>
          <input
            type="text"
            name="Strength"
            id="Strength"
            class="inputbox"
            value='<?php echo $row['Strength']; ?>'
            required
          />
          <label for="Email">Email:</label>
          <input
            type="Email"
            name="Email"
            id="Email"
            class="inputbox"
            value='<?php echo $row['Email']; ?>'
            required
          />
          <label for="Phone">Phone:</label>
          <input
            type="text"
            name="Phone"
            id="Phone"
            placeholder="999-999-9999"
            class="inputbox"
            value='<?php echo $row['Phone_Number']; ?>'
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
      <script src="./app.js"></script> 
</html>
