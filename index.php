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
    <title>Mars Horizon Tours ~ Home</title>

    <!-- link to the global css file-->
    <link rel="stylesheet" href="main.css">
</head>

<!-- Displays the visible body content of the web page -->
<body>
    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Mars Horizon Tours</h1>
    </header>

    <!-- Main content section -->
    <main>
        <section>
            <!-- Heading 2 for the welcome message, centered using inline CSS -->
            <h2 style="text-align: center;"> Welcome to our Outer Space Tours website.<br><br>We look forward to taking you  on an adventure to another planet.</h2>
            <!-- Image container that holds an of image Mars Horizon Tours -->
            <div class="welcome-image">
                <!-- Mars Horizon Tours Image and the width attribute defines the displayed width of the image -->
                <img src="mars_tour.jpg" alt="Mars Landscape" width="400">
            </div>

            <!-- Company description -->
            <div class="company-description">
  <p class="center-text">
    At Mars Horizon Tours, we pioneer on adventure travel beyond Earth.
  </p>
  <p>
    Our mission is to provide the safest, most breathtaking journeys to other planets, guided by 
    highly skilled pilots and an experienced crew. Our most popular trips are to Mars. Join us as we explore our planets.
    Fill out an application if you want to join our pilots team.
            </p>
        </div>
    </section>
</main>
<!-- End of the visible page content -->
</body>
</html>
