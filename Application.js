document.addEventListener("DOMContentLoaded", function () {
    var jsonData = {
        "title": "Space Tour Application",
        "subtitle": "Embark on a Celestial Odyssey as a Universe Explorer Pilot! ",
        "description": "Soar Through the Cosmos with the Stars as Your Guide! <br>Are you ready to take the helm of cutting-edge spacecraft, navigating the vast expanse of the universe itself? <br> We're searching for intrepid pilots with a passion for exploration, a knack for precision, and a thirst for interstellar adventure. 🚀"
    };

    // Populate HTML elements with JSON data
    document.getElementById('title').textContent = jsonData.title;
    document.getElementById('subtitle').textContent = jsonData.subtitle;
    document.getElementById('description').innerHTML = jsonData.description;

    var pilotForm = document.getElementById('pilotForm');
    var errorText = document.getElementById('error');

    pilotForm.addEventListener('submit', function (event) {
        event.preventDefault();

        // Perform form validation here

        // Display error message
        errorText.textContent = "Form submission is currently disabled.";
        errorText.style.display = "block";
    });
});

