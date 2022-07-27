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
  <?php
  $book_id = '';
  $book_id = $_GET["book_id"];
  ?>

  <main>
      <form id="form2" method="POST" name="form" action="submit.php" style="margin-top:150px;">
          <legend style="padding-top:50px;">Job Posting</legend>
          <label for="role">Job Role:</label>
          <input type="text" name="role" id="role" class="inputbox" required/>
          <label for="salary">Salary:</label>
          <input type="text" name="salary" id="salary" class="inputbox" required/>
          <label for="description">Job Description:</label>
          <textarea rows="20" cols="50" name="description"></textarea>
        </fieldset><br><br><br>
        <div class="buttons">
          <input type="submit" value="Submit" class="press" id="submit2" />
          <input type="submit" value="Reset" class="press" id="reset2" />
        </div>
      </form>
    </main>

  <script src="./app.js"></script>
</body>

</html>
