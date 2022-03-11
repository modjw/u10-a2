<?php
  session_start();
  if(!isset($_SESSION["loggedin"])) {
    header('Location: login.php');
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

    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School</title>
  </head>
  <body>
    
    <?php include ("include/header.php"); ?>
    <?php include ("include/navbar.php"); ?>

    <div class="portal-container">
      <div class="flex-container">
        <div class="portal-sidebar">
          <h3>Portal Navigation</h3>
          <hr class="line" color="#F2D0A4" width="80%">
          <div class="portal-menu">
            <ul>
              <li><a href="portal/account.php">My Account</a></li>
              <li><a href="portal/policies.php">School Policies</a></li>
              <?php
                if($_SESSION['role'] == 1 or $_SESSION['role'] == 3) {
                  echo '<li><a href="portal/parent-resources.php">Parent Resources</a></li>';
                }
                if($_SESSION['role'] == 1 or $_SESSION['role'] == 2) {
                  echo '<li><a href="portal/teacher-resources.php">Teacher Resources</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="portal-bg">
          <div class="portal-content">
            <div class="portal-welcome">
              <h2>Parent/Teacher Portal</h2>
              <hr class="line" width="80%">
              <img src="images/globe-network.png" height="100px" width="100px">
              <span>
                <p>Welcome to the Parent and Teacher Portal for Maple Tree Primary School.</p>
                <p>Here you can manage your school account information or access school policies and guidance.</p>
                <p>Also available are resources which you can use to assist your child with their learning, as well as forms for school trips and other activities.</p>
                <p>You can find these resources available from the links on the left hand side of this page.</p>
                <p>We hope you find the Portal useful. When you are finished please remember to 'Logout' using the button above.</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include ("include/footer.php"); ?>

  </body>
</html>