<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
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

    <div class="page-header">
      <h1>Admissions</h1>
    </div>

    <div class="space">
        <br>
    </div>

    <div class="headteacher-welcome-container">
      <div class="head-welcome-block">
        <h1 class="center-text">Admissions Information</h1>
        <hr>
        <p class="center-p">We are currently planning for our September 2022 intake of students.</p>
        <p class="center-p">If you would like your child to attend our school, please see full details of our admissions policies below.</p>
        <p class="center-p">You can apply for admissions through the link to the Cardiff Council Primary School Admissions website below.</p>
        <p class="center-p"><a href="files/example.txt" download>2022 - 2023 Admissions Policy</a></p>
        <p class="center-p"><a href="https://www.cardiff.gov.uk/ENG/resident/Schools-and-learning/Schools/Applying-for-a-school-place/Primary-school/Pages/default.aspx">Cardiff Council Admissions Website</a></p>
        <hr>
      </div>
    </div>

    <br>

    <?php include ("include/footer.php"); ?>

  </body>
</html>