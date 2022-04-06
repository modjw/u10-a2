<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="author" content="Dominic Wheeler">
    <meta name="description" content="The latest news and developments from Maple Tree Primary School in Cardiff">
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

    <div class="page-header">
      <h1>News</h1>
    </div>

    <div class="space">
      <br>
    </div>

    <div class="headteacher-welcome-container">
      <div class="head-welcome-block">
        <h1 class="center-text">School Sports Day Triumph</h1>
        <div class="news-item">
          <img src="images/news1.png" class="news-img">
          <p class="center-p news-date">Date Published: 10/03/2022</p>
          <hr>
          <p class="center-p">Congratulations to all who took part in the school sports day. The final scores for the teams are below:
            <ul class="center-p"><li>Red Team: 36 Points</li>
            <li>Blue Team: 24 Points</li>
            <li>Yellow Team: 11 Points</li>
            <li>Green Team: 29 Points</li></ul>
          </p>
        </div>
      </div>
    </div>

    <br>

    <?php include ("include/footer.php"); ?>

  </body>
</html>