<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="style.css">

  <title>KWC Jobs</title>
  <style>
    body            
{
    background-color:#ebebeb;
    font-size:14px;
    font-family:Verdana;
}
.card1{
  padding-left: 21%;
  width: 140%;
}
#hover{
transition: all .2s ease-in-out; 
}

#hover:hover { 
transform: scale(1.08); 
}

  </style>
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
    <div>
      <h1 class="section-title">List of <span>Jobs</span></h1>
    </div>

    </div>
</section>
  <?php

require('mysqli_connect.php');

// Define the query:
$q = "SELECT KJP.Employer_ID, KE.Name, KJPS.Description AS Job_Status, KJP.Job_Type_ID, KJP.Job_Role, KJP.Description , KJP.No_Of_Applicants, KJP.Salary
FROM KWCJ_Job_Posting KJP
INNER JOIN KWCJ_Employers KE ON KE.ID = KJP.Employer_ID
INNER JOIN KWCJ_Job_Posting_Status KJPS ON KJPS.ID = KJP.Job_Posting_Status_ID";
$r = @mysqli_query($xyz, $q); 
foreach($r as $job)
{
    $id = $job['Employer_ID'];
    $employer = $job['Name'];
    $jobStatus = $job['Job_Status'];
    $jobType = $job['Job_Type_ID'];
    $jobRole = $job['Job_Role'];
    $description = $job['Description'];
    $applicants = $job['No_Of_Applicants'];
    $salary = $job['Salary'];

    // Define the query:
    $q = "SELECT KJP.Employer_ID, KE.Name, KJPS.Description AS Job_Status, KJP.Job_Type_ID, KJP.Job_Role, KJP.Description , KJP.No_Of_Applicants, KJP.Salary
    FROM KWCJ_Job_Posting KJP
    INNER JOIN KWCJ_Employers KE ON KE.ID = KJP.Employer_ID
    INNER JOIN KWCJ_Job_Posting_Status KJPS ON KJPS.ID = KJP.Job_Posting_Status_ID";
    $r = @mysqli_query($xyz, $q); 

?>
<div class="card1" style="
    font-family: Montserrat, sans-serif; font-size:1.2em;">
<div class="container-fluid">
<div class="row" style="
    margin-right: -406px;
    margin-left: -143px;" >
      <form  method="POST" class="form-inline my-2 my-lg-0"  name="form" action="apply.php">
<?php 
        
     while($row = mysqli_fetch_array($r)){

    echo "
    <div class='col-xl-3 col-lg-4 col-md-3 col-sm-3' style='padding: 0 40px 20px 0;'>
    <div id='hover' class='card e-card shadow-sm border-0 mt-4' style='padding: 8px;
    border-radius: 20px;'>
    <span class='text-info mb-0 font-weight-bold'>Employer: {$row['Name']}</span> <br>
            <div class='card-body p-0'>
                <div class='row no-gutters align-items-center'>
                    
                        <div class='bg-white rounded text-center'>
                            <span class='text-danger mb-0 font-weight-bold'>Job Status: {$row['Job_Status']}</span>
                        </div></div>
                       <div class='row no-gutters align-items-center'>
                        <p class=' text-primary card-text text-gray-900 mb-1'>JOB ROLE: <span class='text-secondary'>{$row['Job_Role']}</span></p>
                       </div>
                      
                       <div class='row no-gutters align-items-center'>
                        <p class='text-primary card-text text-gray-900 mb-1'>No of Applicants:<span class='text-secondary'> {$row['No_Of_Applicants']}</span></p>
                       </div>
                       <div class='row no-gutters align-items-center'>
                        <p class=' text-primary card-text text-gray-900 mb-1'>Salary<span class='text-secondary'> {$row['Salary']}</span></p>
                       </div>
                        <div class='row no-gutters align-items-center'>
                        <p class='text-primary card-text text-gray-900 mb-1'>Description: <span class='text-secondary'>{$row['Description']}</span></p>
                       </div>
                        <div class='buttons'>
          <input type='submit' value='Apply' class='btn btn-primary' id='submit2' style='width:100%; margin-left:20% ; 
          margin-bottom: 20px; margin-top: 20px; height:35px; 
          font-size: 1em; font-family: Montserrat, sans-serif; '  />
        </div>
                </div>
            </div>
        </a></div>

";
}


?>
    </div>
  </div>
</div>  
<?php
} 
?>
  </form>

  
<!-- Footer -->
<section id="footer" style="margin-top:20px;">
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
</body>
</html>