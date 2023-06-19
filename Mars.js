function validateForm() {
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var experience = document.getElementById("experience").value;
    var qualifications = document.getElementById("qualifications").value;
    var email = document.getElementById("email").value;
    var isValid = true;

    // Reset error messages
    var errorElements = document.getElementsByClassName("error");
    for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].style.display = "none";
    }

    // Name validation
    if (name === "") {
        document.getElementById("nameError").style.display = "block";
        isValid = false;
    }

    // Age validation
    if (isNaN(age) || age < 18) {
        document.getElementById("ageError").style.display = "block";
        isValid = false;
    }

    // Experience validation
    if (isNaN(experience) || experience < 0) {
        document.getElementById("experienceError").style.display = "block";
        isValid = false;
    }

    // Qualifications validation
    if (qualifications === "") {
        document.getElementById("qualificationsError").style.display = "block";
        isValid = false;
    }

    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById("emailError").style.display = "block";
        isValid = false;
    }

    return isValid;
}
