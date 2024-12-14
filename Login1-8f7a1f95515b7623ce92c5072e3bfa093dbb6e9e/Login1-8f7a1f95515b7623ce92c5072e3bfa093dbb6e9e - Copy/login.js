// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector("form");
    const emailInput = document.querySelector("input[placeholder='name@email.com']");
    const passwordInput = document.querySelector("input[placeholder='Password']");
    const rememberMeCheckbox = document.getElementById("rememberMe");

    // Listen for form submission
    loginForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission for validation

        // Clear previous error messages
        const errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach((msg) => msg.remove());

        let isValid = true;

        // Validate Email
        if (!validateEmail(emailInput.value.trim())) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
        }

        // Validate Password
        if (passwordInput.value.trim() === "") {
            showError(passwordInput, "Password is required.");
            isValid = false;
        }

        // If all validations pass
        if (isValid) {
            // Mock login process
            alert("Login successful!");

            // Optionally handle "Remember Me" functionality
            if (rememberMeCheckbox.checked) {
                localStorage.setItem("rememberedEmail", emailInput.value.trim());
            } else {
                localStorage.removeItem("rememberedEmail");
            }

            // Redirect to a dashboard or another page
            window.location.href = "SKhuntdashboard.html"; // Replace with your desired page
        }
    });

    // Load remembered email (if available)
    const rememberedEmail = localStorage.getItem("rememberedEmail");
    if (rememberedEmail) {
        emailInput.value = rememberedEmail;
        rememberMeCheckbox.checked = true;
    }

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

