<?php
echo
'<nav id="overNav" class="overlay">
    <ul class="overlay-menu">
      <li><a href="/u10-A2/index.php">Home</a></li>
      <li><a href="/u10-A2/about.php">About Us</a></li>
      <li><a href="/u10-A2/about.html">Admissions</a></li>
      <li><a href="/u10-A2/news.html">News</a></li>
      <li><a href="/u10-A2/contact.html">Contact Us</a></li>
      <li><a href="/u10-A2/portal.html">Parent/Teacher Portal</a></li>
      <li><a href="/u10-A2/login.php">Login</a></li>
    </ul>
  </nav>

  <nav class="navbar sticky">
      <ul class="topnav">
        <li><a href="/u10-A2/index.php">Home</a></li>
        <div class="dropdown">
          <li><button class="dropbtn">About</button></li>
          <i class="fa fa-caret-down"></i>
          <div class="dropdown-content">
            <a href="/u10-A2/about.php">About Us</a>
            <a href="/u10-A2/admissions.php">Admissions</a>
          </div>
        </div>
        <li><a href="/u10-A2/news.html">News</a></li>
        <li><a href="/u10-A2/contact.html">Contact Us</a></li>
        <li><a href="/u10-A2/portal.php">Parent/Teacher Portal</a></li>
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
