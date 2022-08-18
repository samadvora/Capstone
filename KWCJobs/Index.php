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
            </ul>
          </div>
        </div>
      </div>
    </section>

<style>

h2, p {
  color: black;
}

.divide {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.leftside {
  left: 0;
  background-color: #00b1e5;
}

.leftside:hover {
  opacity: 0.6;
}

.rightside:hover {
  opacity: 0.6;
}

.rightside {
  right: 0;
  background-color: white;
}

.center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.center img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="divide leftside" onclick="employer('employee_login_page.php');">
  <div class="center">
    <img src="images/officer.png" alt="Employer">
    <h2 style="padding-top: 30px; font-size:25px;">I'm an Employer</h2>
    <p style="font-size:17px;">Let's make your next great hire.</p>
  </div>
</div>

<div class="divide rightside" onclick="student('student_login_page.php');">
  <div class="center">
    <img src="images/student.png" alt="Student">
    <h2 style="padding-top: 30px; font-size:25px;">I'm a Student</h2>
    <p style="font-size:17px;">Find the job that's right for you.</p>
  </div>
</div>

<script type="text/javascript">
    function student(web) {
      window.location.href = web;
    }

    function employer(web) {
      window.location.href = web;
    }

</script>
</body>

</html> 
