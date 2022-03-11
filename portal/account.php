<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: /u10-A2/index.php');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'school';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT email, contactNo, roleName, firstName, lastName FROM accounts WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($email, $contactNo, $roleName, $firstName, $lastName);
$stmt->fetch();
$stmt->close();
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

    <link rel="stylesheet" href="../styles/style.css">
    <script src="scripts/script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School</title>
  </head>
  <body>
    
    <?php include ("../include/header.php"); ?>
    <?php include ("../include/navbar.php"); ?>

    <div class="portal-container">
      <div class="flex-container">
        <div class="portal-sidebar">
          <h3>Portal Navigation</h3>
          <hr class="line" color="#F2D0A4" width="80%">
          <div class="portal-menu">
            <ul>
              <li><a href="account.php">My Account</a></li>
              <li><a href="policies.php">School Policies</a></li>
              <?php
                if($_SESSION['role'] == 1 or $_SESSION['role'] == 3) {
                  echo '<li><a href="parent-resources.php">Parent Resources</a></li>';
                }
                if($_SESSION['role'] == 1 or $_SESSION['role'] == 2) {
                  echo '<li><a href="teacher-resources.php">Teacher Resources</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="portal-bg">
          <div class="portal-content">
            <div class="portal-welcome">
              <h2>My Account</h2>
              <hr class="line" width="80%">
              <img src="../images/globe-network.png" height="100px" width="100px">
              <span>
                <table>
                  <tr>
                      <td style="font-weight: bold">Account Number:</td>
                      <td><?=$_SESSION['id']?></td>
                  </tr>
                  <tr>
                      <td style="font-weight: bold">Username:</td>
                      <td><?=$_SESSION['name']?></td>
                  </tr>
                  <tr>
                      <td style="font-weight: bold">Name:</td>
                      <td><?=$firstName?> <?=$lastName?></td>
                  </tr>
                  <tr>
                      <td style="font-weight: bold">Email:</td>
                      <td><?=$email?></td>
                  </tr>
                  <tr>
                      <td style="font-weight: bold">Contact Number:</td>
                      <td><?=$contactNo?></td>
                  </tr>
                  <tr>
                      <td style="font-weight: bold">Account Type:</td>
                      <td><?=$roleName?></td>
                  </tr>
                </table>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include ("../include/footer.php"); ?>

  </body>
</html>