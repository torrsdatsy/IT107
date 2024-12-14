// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    // Dynamically display user's name
    const userName = "Salabat"; // Replace with actual user name from your backend or database
    const welcomeMessage = document.querySelector("h1.fw-bold");
    welcomeMessage.textContent = `Welcome, ${userName}!`;

    // Dynamic content for "Recommended Skills"
    const recommendedSkills = [
        "JavaScript",
        "Data Analysis",
        "Cloud Computing",
        "UI/UX Design",
    ];

    const recommendationsSection = document.querySelector(".card-body h5.card-title");
    const recommendationsList = document.createElement("ul");
    recommendationsList.classList.add("list-group", "mt-3");

    recommendedSkills.forEach((skill) => {
        const skillItem = document.createElement("li");
        skillItem.classList.add("list-group-item");
        skillItem.textContent = skill;
        recommendationsList.appendChild(skillItem);
    });

    // Append dynamic recommendations under the "Recommended Skills" card
    recommendationsSection.parentElement.appendChild(recommendationsList);

    // Dynamic content for "Recent Activity"
    /*const recentActivities = [
        "Completed JavaScript Course",
        "Applied for Frontend Developer Role",
        "Updated Profile Picture",
    ];*/

    // Target the "Recent Activity" list group
    const activityList = document.querySelector(".list-group");
    activityList.innerHTML = ""; // Clear existing hardcoded activities

    recentActivities.forEach((activity) => {
        const activityItem = document.createElement("li");
        activityItem.classList.add("list-group-item");
        activityItem.textContent = activity;
        activityList.appendChild(activityItem);
    });

    // Navigation Event for Logout
    const logoutLink = document.querySelector("a.text-danger");
    logoutLink.addEventListener("click", function (event) {
        event.preventDefault();
        const confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            // Clear user session or token
            alert("Logged out successfully!");
            window.location.href = "login.html"; // Redirect to login page
        }
    });
});
