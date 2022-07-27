<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <title>KWC Jobs</title>
</head>

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>K</span>WC <span>J</span>obs</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <section id="contact">
  <div class="contact container">

<?php 

$eId = '';
$role = '';
$salary = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  require('mysqli_connect.php');

  $eId = 1;

  // $book_id = '';
  // $book_id = $_GET["book_id"];

	if (empty($_POST['role'])) {
		$roleError = 'Please enter the Role.';
	} else {
		$role = mysqli_real_escape_string($xyz, $_POST['role']);
	}

  if (empty($_POST['salary'])) {
		$salaryError = 'Please enter the Salary.';
	} else {
    $salary = mysqli_real_escape_string($xyz, $_POST['salary']);
	}

	if (empty($_POST['description'])) {
		$descriptionError = 'Please enter the Job Description.';
	} else {
    $description = mysqli_real_escape_string($xyz, $_POST['description']);
	}

  if(empty($roleError) && empty($salaryError) && empty($descriptionError)) {

    $q = "INSERT INTO KWCJ_Job_Posting (Employer_ID, Job_Posting_Status_ID, Job_Role, Description, No_Of_Applicants, Salary) VALUES ($eId, 1 , '$role', '$description', 0, '$salary')";
		$r = @mysqli_query($xyz, $q);

    if ($r) { 

			echo '<h1 class="section-title">Job Posted <span>Successfully!</span></h1><br><br><br>';

		} else { 

			echo '<h1>System Error</h1>
			<p class="error">Sorry! Error while posting Job.</p>';

			echo '<p>' . mysqli_error($xyz) . '<br><br>Query: ' . $q . '</p>';

		} 
  }
}

?>

</div>
</section>

<!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>C</span>onnect with <span>U</span>s</h1><br>
      </div>
      <div class="social-icon">
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
      </div>
      <h2>Sourav Pattnaik - 8757707</h2>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>