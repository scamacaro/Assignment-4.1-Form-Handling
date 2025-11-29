// see if the form inputs were propertly
// Validate the form inputs
function validateForm() {
    let form = document.frmApp;
    let fullName = form.txtFullName.value.trim();
    let age = form.txtAge.value.trim();
    let experience = form.txtExperience.value.trim();
    let training = form.txtTraining.value.trim().toLowerCase();
    let planet = form.txtPlanet.value.trim();
    let reason = form.txtReason.value.trim();

    // Shortcut to the message div
    let message = document.getElementById("divMessage");

    // Validation: Full Name
    if (fullName.length === 0) {
        message.textContent = "Please enter your full name.";
        return false;
    }

    // Validation: Age
    if (age.length === 0) {
        message.textContent = "Please enter a valid age (18 or older).";
        return false;
    }

    // Validation: Flight Experience
    if (experience.length === 0) {
        message.textContent = "Please enter your years of flight experience.";
        return false;
    }

    // Validation: Astronaut Training
    if (training.length === 0) {
        message.textContent = "Please enter 'Yes' or 'No' for astronaut training.";
        return false;
    }

    // Validation: Planet Preference
    if (planet.length === 0) {
        message.textContent = "Please enter a planet you want to explore.";
        return false;
    }

    // Validation: Motivation
    if (reason.length === 0) {
        message.textContent = "Please tell us more about your motivation.";
        return false;
    }

    // If we get here, then the form submission was successful
    alert("Application submitted successfully!");
    return true;
}
