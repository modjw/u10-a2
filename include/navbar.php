<?php
echo
'<nav id="overNav" class="overlay">
    <ul class="overlay-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="about.html">Admissions</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="portal.html">Parent/Teacher Portal</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <nav class="navbar sticky">
      <ul class="topnav">
        <li><a href="index.php">Home</a></li>
        <div class="dropdown">
          <li><button class="dropbtn">About</button></li>
          <i class="fa fa-caret-down"></i>
          <div class="dropdown-content">
            <a href="about.php">About Us</a>
            <a href="#">Admissions</a>
          </div>
        </div>
        <li><a href="news.html">News</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="portal.php">Parent/Teacher Portal</a></li>
      </ul>';
      ?>

      <?php 
        if(isset($_SESSION["loggedin"])) {
          echo '<span class="login-button"><a href="logout.php"><strong>Logout</strong></a></span>';
        }else{
          echo '<span class="login-button"><a href="login.php"><strong>Login</strong></a></span>';
        }
        ?>
  <?php
  echo '</nav>';
  ?>
