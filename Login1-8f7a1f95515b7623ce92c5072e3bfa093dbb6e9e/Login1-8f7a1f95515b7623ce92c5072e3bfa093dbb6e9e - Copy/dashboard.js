// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    // Dynamically update the welcome message
    const userName = "Salabat"; // Replace with actual user data from the backend
    const welcomeMessage = document.querySelector(".navbar-brand2");
    if (welcomeMessage) {
        welcomeMessage.textContent = `Welcome, ${userName}`;
    }

    // Notifications Button Click Event
    const notificationsButton = document.querySelector(".btn-dark");
    if (notificationsButton) {
        notificationsButton.addEventListener("click", function () {
            alert("You have no new notifications."); // Replace with actual notification logic
        });
    }

    // Dynamic Data for Dashboard Cards
    const dashboardData = {
        totalUsers: 1200,
        activeSessions: 320,
        tasksCompleted: 450,
    };

    // Update dashboard card values dynamically
    const cardValues = document.querySelectorAll(".card-text.fs-2");
    if (cardValues.length >= 3) {
        cardValues[0].textContent = dashboardData.totalUsers.toLocaleString();
        cardValues[1].textContent = dashboardData.activeSessions.toLocaleString();
        cardValues[2].textContent = dashboardData.tasksCompleted.toLocaleString();
    } else {
        console.error("Dashboard card elements are missing.");
    }

    // Log out confirmation
    const logoutLink = document.querySelector("a.text-danger");
    if (logoutLink) {
        logoutLink.addEventListener("click", function (event) {
            event.preventDefault();
            const confirmLogout = confirm("Are you sure you want to log out?");
            if (confirmLogout) {
                // Clear session or user data if necessary
                console.log("Session cleared successfully.");
                alert("Logged out successfully!");
                window.location.href = "login.html"; // Redirect to login page
            }
        });
    }

    // Optional: Add additional event listeners or functions here
    console.log("Dashboard script initialized successfully.");
});