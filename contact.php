<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Dominic Wheeler">
    <meta name="description" content="Contact form to get in touch with Maple Tree Primary School">
    <meta name="robots" content="noindex, nofollow">
    <meta name="keywords" content="school">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School - Contact</title>
  </head>
  <body>

    <?php include ("include/header.php"); ?>
    <?php include ("include/navbar.php"); ?>

    <div class="page-header">
      <h1>Contact Us</h1>
    </div>

    <div class="space">
      <br>
    </div>

    <div class="headteacher-welcome-container">
      <div class="head-welcome-block">
        <h1 class="center-text">Contact Us</h1>
        <hr>
        <p class="center-p">You can contact our school using the form below. We will endeavour to reply as soon as possible.</p>
      </div>
    </div>

    <div class="login contact">
      <p>Please fill in all fields</p>
      <form>
        <input type="text" name="name" placeholder="Name" id="name" required>
        <input type="text" name="email" placeholder="Contact E-mail" id="email" required>
        <input type="text" name="message" placeholder="Please enter your enquiry here" id="message" required>
        <input type="submit" value="Submit">
      </form>
    </div>

    <br>

    <?php include ("include/footer.php"); ?>

  </body>
</html>