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
    <title>Mars Horizon Tours ~ Countdown</title>

    <!-- link to the global css file-->
    <link rel="stylesheet" href="main.css">
</head>
<body>
     <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Mars Horizon Tours ~ Countdown</h1>
    </header>

    <!-- Main content section -->
    <main>
        <!-- Div that will display the countdown numbers (days, hours, minutes, seconds) -->
        <div id="divCountdown">Countdown</div>
        <!-- Div that will display a message related to the countdown (like less than a week until launch) -->
        <div id="divCountdownMessage"></div>
    </main>

    <?php
        // php variable to hold the time I have determined for our next launch
        $launchDateTime = strtotime("November 30, 2025 12:00:00");

        // format the date we just made in a more JavaScript friendly way
        $jsDateTime = date("F d, Y H:i:s", timestamp: $launchDateTime);
    ?>

    <script>
        // passing the launch date from PHP to JS
        let countdownDateTime = "<?php echo $jsDateTime; ?>";
    </script>
    <script src="countdown.js"></script>

</body>
</html>
