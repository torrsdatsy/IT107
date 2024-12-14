// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    const signupForm = document.querySelector("form");
    const fullNameInput = document.querySelector("input[placeholder='Full Name']");
    const emailInput = document.querySelector("input[placeholder='yourname@email.com']");
    const passwordInput = document.querySelector("input[placeholder='Password']");
    const confirmPasswordInput = document.querySelector("input[placeholder='Confirm Password']");
    const termsCheckbox = document.getElementById("termsAndConditions");

    // Listen for form submission
    signupForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission for validation

        // Clear previous error messages
        const errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach((msg) => msg.remove());

        let isValid = true;

        // Validate Full Name
        if (fullNameInput.value.trim() === "") {
            showError(fullNameInput, "Full Name is required.");
            isValid = false;
        }

        // Validate Email
        if (!validateEmail(emailInput.value.trim())) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
        }

        // Validate Password
        if (passwordInput.value.trim().length < 6) {
            showError(passwordInput, "Password must be at least 6 characters long.");
            isValid = false;
        }

        // Validate Confirm Password
        if (passwordInput.value.trim() !== confirmPasswordInput.value.trim()) {
            showError(confirmPasswordInput, "Passwords do not match.");
            isValid = false;
        }

        // Validate Terms and Conditions
        if (!termsCheckbox.checked) {
            alert("You must agree to the terms and conditions to sign up.");
            isValid = false;
        }

        // If all validations pass
        if (isValid) {
            alert("Sign up successful!");
            signupForm.submit(); // Submit the form (or replace this with an API call)
        }
    });

    // Show error messages
    function showError(inputElement, message) {
        const error = document.createElement("small");
        error.textContent = message;
        error.classList.add("text-danger", "error-message");
        inputElement.parentElement.appendChild(error);
    }

    // Validate email format
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
