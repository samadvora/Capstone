<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/ico" href="images/favicon.png" />
  <link rel="stylesheet" href="style.css">
  <title>KWC Jobs</title>

  <style>
              #bannerimage {
  width: 80%;
  background-image: url("./images/about.jpg");
  height: 405px;
  background-color: purple;
  background-position: center;
}
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
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><i class="fas fa-user-circle"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="wrapper">
      <div class="wrapper container">
        <div>
          <h1>Welcome to<h1> 
          <h1>KWC Jobs!</h1>
        </div>
      </div>
    </section>
  
  
    <section id="scores">
      <div class="scores-container">
        <div class="scores-top">
          <h1 class="section-title">Trending<span> Jobs</span></h1>
          <p>
            Choose a job you love, and you will never have to work a day in your life.
          </p>
        </div>
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
  
    <section id="scores">
      <div class="scores-container">
        
        <div class="scores-bottom">
          <div class="scores-item">
            <h2><span><?php echo $jobRole; ?></span></h2>
            <p>
            Company Name: <?php echo $employer; ?><br />
            Number of Applicants: <?php echo $applicants; ?><br />
            Salary: <?php echo $salary; ?><br />
            </p>
          </div>
        </div>
      </div>
    </section>
 <?php  }
?>
    </div>
    </section>
    <section id="news">
      <div class="news container">
        <div class="news-header">
          <h1 class="section-title">Trending <span>Topics</span></h1>
        </div>
        <div class="all-news">
          <div class="news-item">
            <div class="news-info">
              <h1>Web Development</h1>
              <p>
              Web development is the process of building websites and apps for the internet—or for a private network known as an intranet. Web developers bring the design and functionality of a website to life, writing code that determines things like style, layout, and interactivity. From the most simple, static web pages to social media platforms and apps; from e-commerce websites to content management systems (like WordPress)—all the tools we use via the internet have been built by web developers. 
              </p>
            </div>
            <div class="news-img">
              <img src="https://dpbnri2zg3lc2.cloudfront.net/en/wp-content/uploads/2021/07/web-image@3x.jpg" alt="img" />
            </div>
          </div>
          <div class="news-item">
            <div class="news-info">
              <h1>Data Analytics</h1>
              <p>
              Data analytics is the process of turning raw data into meaningful, actionable insights. You can think of it as a form of business intelligence, used to solve specific problems and challenges within an organization. It’s all about finding patterns in a dataset which can tell you something useful and relevant about a particular area of the business—how certain customer groups behave, for example, or why sales dipped during a given time period.
              </p>
            </div>
            <div class="news-img">
              <img src="https://dpbnri2zg3lc2.cloudfront.net/en/wp-content/uploads/2021/07/DA-image@3x.jpg" alt="img" />
            </div>
          </div>
          <div class="news-item">
            <div class="news-info">
              <h1>UI Design</h1>
              <p>
              User interface (UI) design refers to the visual design of a product’s digital interface, such as an app screen or website. It’s the process of designing the visual and interactive properties of a visual experience, ensuring the interface is both clear for the user to navigate and overall aesthetically pleasing. UI design is a multidisciplinary field involving various elements from visual design, UX design, and graphic design.
              </p>
            </div>
            <div class="news-img">
              <img src="https://dpbnri2zg3lc2.cloudfront.net/en/wp-content/uploads/2021/07/UI-image@3x.jpg" alt="img" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section id="pandv">
      <div class="pandv container">
        <div class="col-left">
          <div class="pandv-img">
            <img src="./images/unicef.png" alt="img" />
          </div>
        </div>
        <div class="col-right">
          <h1 class="section-title">Donate <span>Vaccines</span></h1>
          <h2>Donate now to Deliver Covid-19 Vaccines.</h2>
          <p>
            CricInfo in partner with Unicef Canada requests you to contribute
            for communities and countries with lower income. Become a covid
            warrior and donate a vaccine.
          </p>
          <a
            href="https://secure.unicef.ca/page/86234/donate/1?ea.tracking.id=21DIAQ12HBE"
            target="_blank"
            class="button"
            >Click Here</a
          >
        </div>
      </div>
    </section> -->

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
