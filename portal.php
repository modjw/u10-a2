<?php
  session_start();

// If the user is at this page without logging in, redirect to the Login page
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
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School</title>
  </head>
  <body>
    
  <?php include ("include/header.php"); ?>
  <?php include ("include/navbar.php"); ?>

  <?php include ("include/footer.php"); ?>

</body>
</html>