<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: /u10-A2/index.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta name="author" content="Dominic Wheeler">
    <meta name="description" content="A school website">
    <meta name="robots" content="noindex, nofollow">
    <meta name="keywords" content="school">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../styles/style.css">
    <script src="scripts/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School</title>
  </head>
  <body>
    
  <?php include ("../include/header.php"); ?>
  <?php include ("../include/navbar.php"); ?>

<div class="portal-container">
  <div class="flex-container">
    <div class="portal-sidebar">
      <h3>Portal Navigation</h3>
      <hr class="line" color="#F2D0A4" width="80%">
      <div class="portal-menu">
        <ul>
          <li><a href="account.php">My Account</a></li>
          <li><a href="policies.php">School Policies</a></li>
          <?php
            if($_SESSION['role'] == 1 or $_SESSION['role'] == 3) {
              echo '<li><a href="parent-resources.php">Parent Resources</a></li>';
            }
            if($_SESSION['role'] == 1 or $_SESSION['role'] == 2) {
              echo '<li><a href="teacher-resources.php">Teacher Resources</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>
    <div class="portal-bg">
      <div class="portal-content">
        <div class="portal-welcome">
          <h2>Resources for Teachers</h2>
          <hr class="line" width="80%">
          <img src="../images/globe-network.png" height="100px" width="100px">
          <span>
          <p>On this page you will find sample worksheets, activities, and learning resources to assist in creating lesson plans.</p>
          <hr>
          <h3>Curriculum Information</h3>
          <p><a href="../files/example.txt" download>Lower School Curriculum (Infants Years 1 - 3)</a></p>
          <p><a href="../files/example.txt" download>Higher School Curriculum (Juniors Years 4 - 6)</a></p>
          <hr>
          <h3>Worksheets</h3>
          <p><a href="../files/example.txt" download>Science Worksheets - Solar System</a></p>
          <p><a href="../files/example.txt" download>English Worksheets - Letters and Punctuation</a></p>
          <p><a href="../files/example.txt" download>Maths Worksheets - Shapes and Numbers</a></p>
          <hr>
          <h3>External Resources</h3>
          <p><a href="http://google.com">Teaching Websites</a></p>
          <hr>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include ("../include/footer.php"); ?>

</body>
</html>