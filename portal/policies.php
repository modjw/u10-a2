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
          <li><a href="parent-resources.php">Parent Resources</a></li>
          <li><a href="teacher-resources.php">Teacher Resources</a></li>
        </ul>
      </div>
    </div>
    <div class="portal-bg">
      <div class="portal-content">
        <div class="portal-welcome">
          <h2>School Policies and Guidance</h2>
          <hr class="line" width="80%">
          <img src="../images/globe-network.png" height="100px" width="100px">
          <span>
          <p>On this page are copies of our school policies and resources. Click the links below to begin the file download and then view at your leisure.</p>
          <hr>
          <h3>School Policies</h3>
          <p><a href="../files/example.txt" download>Attendance Policy</a></p>
          <p><a href="../files/example.txt" download>Uniform Policy</a></p>
          <p><a href="../files/example.txt" download>Standards and Behavioural Code</a></p>
          <hr>
          <h3>School Guidance</h3>
          <p><a href="../files/example.txt" download>Coronavirus and COVID-19</a></p>
          <p><a href="../files/example.txt" download>Curriculum and Extracurricular Activities</a></p>
          <p><a href="../files/example.txt" download>Pastoral Support and Wellbeing</a></p>
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