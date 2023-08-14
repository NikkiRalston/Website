document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    const errorElement = document.querySelector('.error');

    form.addEventListener('submit', function(event) {
        hideError();

        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        if (nameInput.value.trim() === '') {
            displayError('Name is required');
            isValid = false;
        }

        if (emailInput.value.trim() === '') {
            displayError('Email is required');
            isValid = false;
        } else if (!isValidEmail(emailInput.value)) {
            displayError('Please enter a valid email');
            isValid = false;
        }

        if (messageInput.value.trim() === '') {
            displayError('Message is required');
            isValid = false;
        }

        return isValid;
    }

    function displayError(message) {
        errorElement.style.display = 'block';
        errorElement.textContent = message;
    }

    function hideError() {
        errorElement.style.display = 'none';
    }

    function isValidEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
});
