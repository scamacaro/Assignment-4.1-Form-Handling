<?php
session_start();

// the user must be logged in to access this page;

// if the user is not loged in, direct back to the login page 
if ($_SESSION['username'] ==""){
    // add in a redict to the intranet page
    header("Location: login.php");
}

?>

<!-- Declares the document type as HTML5 -->
<!DOCTYPE html>
<!-- Starts the HTML document and sets the language to English -->
<html lang="en">
<head>
    <!-- Defines the character encoding as UTF-8 for proper text display -->
    <meta charset="UTF-8">
    <!-- Makes the page responsive to different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sets the title that appears on the browser tab -->
    <title>Mars Horizon Tours ~ Employee Intranet</title>
    <!-- link to the global css file-->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Welcome to the Employee Intranet</h1>
    </header>

    <main class="secure-container">
    <h2>Documents you need to fill out</h2>
    <p>Please complete all required employee onboarding paperwork.</p>
    <p>These documents help us ensure a smooth and safe mission preparation process.</p>
    <p>If you have any questions email our support team at admin@marshorizontours.com</p>
    </main>
     
</body>
</html>