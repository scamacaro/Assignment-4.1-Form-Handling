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
    <title>Mars Horizon Tours ~ Pilot Application</title>

    <!-- link to the global css file -->
    <link rel="stylesheet" href="main.css">

    <!-- link to the Javascript file with the form validation -->
    <script src="index.js"></script>
</head>
<body>
    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Mars Horizon Tours ~ Pilot Application</h1>
    </header>

    <!-- Main content section -->
    <main>
        <h2>Please fill out our pilot application to join the pool of potential pilots for our next trip to outer space.</h2>

        <!-- Div for displaying validation messages -->
        <div id="divMessage" class="error"></div>

        <!-- Pilot Application Form -->
        <form method="post" id="frmApp" name="frmApp" action="app.php" onsubmit="return validateForm();">

            <!-- Full Name -->
            <div>
                <label for="txtFullName">Full Name:</label>
                <input type="text" id="txtFullName" name="txtFullName" placeholder="Your Full Name">
            </div>

            <!-- Age -->
            <div>
                <label for="txtAge">Age:</label>
                <input type="text" id="txtAge" name="txtAge" placeholder="Your Age">
            </div>

            <!-- Flight Experience -->
            <div>
                <label for="txtExperience">Years of Flight Experience:</label>
                <input type="text" id="txtExperience" name="txtExperience" placeholder="Years of experience">
            </div>

            <!-- Astronaut Training -->
            <div>
                <label for="txtTraining">Have you completed astronaut training? (Yes/No)</label>
                <input type="text" id="txtTraining" name="txtTraining" placeholder="Yes or No">
            </div>

            <!-- Planet Preference -->
            <div>
                <label for="txtPlanet">Which planet would you love to explore next?</label>
                <input type="text" id="txtPlanet" name="txtPlanet" placeholder="Enter a planet name">
            </div>

            <!-- Motivation -->
            <div>
                <label for="txtReason">Why do you want to be a Mars pilot?</label><br>
                <textarea id="txtReason" name="txtReason" rows="4" cols="40" placeholder="Tell us your motivation..."></textarea>
            </div>

            <!-- Submit button -->
            <input type="submit" value="Submit Application">
        </form>
    </main>
</body>
</html>
