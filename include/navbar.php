<?php
echo
'<nav id="overNav" class="overlay">
    <ul class="overlay-menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="about.html">Admissions</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="portal.html">Parent/Teacher Portal</a></li>
      <li><a href="login.html">Login</a></li>
    </ul>
  </nav>

  <nav class="navbar sticky">
      <ul class="topnav">
        <li><a href="index.html">Home</a></li>
        <div class="dropdown">
          <li><button class="dropbtn">About</button></li>
          <i class="fa fa-caret-down"></i>
          <div class="dropdown-content">
            <a href="#">About Us</a>
            <a href="#">Admissions</a>
          </div>
        </div>
        <li><a href="news.html">News</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="portal.html">Parent/Teacher Portal</a></li>
      </ul>
        <button class="login-button"><strong>Login</strong></button>
  </nav>';
  ?>
