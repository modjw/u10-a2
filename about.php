<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="author" content="Dominic Wheeler">
    <meta name="description" content="About Maple Tree Primary School, an award winning primary school based in Cardiff">
    <meta name="robots" content="noindex, nofollow">
    <meta name="keywords" content="school">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School - About Us</title>
  </head>
  <body>

    <?php include ("include/header.php"); ?>
    <?php include ("include/navbar.php"); ?>

    <div class="page-header">
        <h1>About Our School</h1>
    </div>

    <div class="carousel">
      <div class="carousel-photo fade">
        <img src="images/classroom-1.png" style="width:100%">
      </div>
      <div class="carousel-photo fade">
        <img src="images/classroom-2.png" style="width:100%">
      </div>
      <div class="carousel-photo fade">
        <img src="images/classroom-3.png" style="width:100%">
      </div>
      <div class="carousel-photo fade">
        <img src="images/classroom-4.png" style="width:100%">
      </div>
      <a class="carousel-prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="carousel-next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <br>

    <div class="headteacher-welcome-container">
      <div class="head-welcome-block">
        <div class="welcome-text">
          <h1 class="center-text">Our Vision Statement</h1>
          <blockquote class="center-p">
            "We believe that education should take place in a fully inclusive environment with equal opportunities for all
            and that all children should learn to value religious and cultural differences. Our school strives to be at the
            centre of the local community with positive and effective links to the wider and global communities."
          </blockquote>
        </div>
      </div>
    </div>

    <br>

    <div class="headteacher-welcome-container">
      <div class="head-welcome-block">
        <h1 class="center-text">Meet the Staff</h1>
        <div class="meet-row-left">
          <div>
            <img src="images/headteacher.png" class="staff-photo" height="125" width="125">
          </div>
          <span> This is the Headteacher of Maple Tree Primary, Ms. Pickles. Her favourite part of the school is the sense of community.</span>
        </div>
        <hr>
        <div class="meet-row-left">
          <div>
            <img src="images/teacher2.png" class="staff-photo" height="125" width="125">
          </div>
          <span>Mr. Whitlingham is the Deputy Headteacher of Maple Tree Primary, and has been at the school for 10 years. His favourite part of the school is the holidays.</span>
        </div>
        <hr>
        <div class="meet-row-left">
          <div>
            <img src="images/teacher1.png" class="staff-photo" height="125" width="125">
          </div>
          <span>Mrs. Caramel has been at the school for 5 years and is the curriculum co-ordinator. Her favourite thing about the school is the children.</span>
        </div>
        <hr>
        <div class="meet-row-left">
          <div>
            <img src="images/dog1.png" class="staff-photo" height="125" width="125">
          </div>
          <span>Poppy is the therapy dog for the Infants (Years 1 to 3) and she is 11 years old. She likes sausages, ice cream, and sleeping.</span>
        </div>
        <hr>
        <div class="meet-row-left">
          <div>
            <img src="images/dog2.png" class="staff-photo" height="125" width="125">
          </div>
          <span>Daisy is the therapy dog for the Juniors (Years 4 to 6) and she is one year old. She likes chasing birds, long walks, and eating carrots.</span>
        </div>
      </div>
    </div>

    <br>

    <?php include ("include/footer.php"); ?>

  </body>
</html>