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
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lato&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">

    <title>Maple Tree Primary School</title>
  </head>
<body>

<?php include ("include/header.php"); ?>
<?php include ("include/navbar.php"); ?>

<div class="page-header">
    <h1>Admissions</h1>
</div>
<hr class="page-hr">

    <!-- <div class="space">
        <br>
    </div> -->

    <div class="headteacher-welcome-container">
        <div class="head-welcome-block">
            <h1 class="center-text">Admissions Information</h1>
            <hr>
            <p>Admissions information will go here.</p>
        </div>
    </div>

    <br>

    <?php include ("include/footer.php"); ?>

</body>
</html>