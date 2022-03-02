<?php
echo
'<nav id="overNav" class="overlay">
    <ul class="overlay-menu">
      <li><a href="/u10-A2/index.php">Home</a></li>
      <li><a href="/u10-A2/about.php">About Us</a></li>
      <li><a href="/u10-A2/admissions.php">Admissions</a></li>
      <li><a href="/u10-A2/news.php">News</a></li>
      <li><a href="/u10-A2/contact.php">Contact Us</a></li>';
      if(isset($_SESSION["loggedin"])) {
        echo 
        '<li><a href="/u10-A2/portal.php">Parent/Teacher Portal</a></li>
         <li><a href="/u10-A2/logout.php">Logout</a></li>';
      } else {
        echo '<li><a href="/u10-A2/login.php">Login</a></li>';
      }
    echo '</ul>
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
        <li><a href="/u10-A2/contact.html">Contact Us</a></li>';
        if(isset($_SESSION["loggedin"])) {
          echo '<li><a href="/u10-A2/portal.php">Parent/Teacher Portal</a></li>';
        }
      echo '</ul>';

        if(isset($_SESSION["loggedin"])) {
          echo '<span class="login-button"><a href="/u10-A2/logout.php"><strong>Logout</strong></a></span>';
        }else{
          echo '<span class="login-button"><a href="/u10-A2/login.php"><strong>Login</strong></a></span>';
        }
  echo '</nav>';
  ?>
