// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    // User Data
    const userProfile = {
        name: "Arnulfo Ale",
        username: "@arnulfoale",
        bio: "A passionate developer who loves to create innovative solutions and explore new technologies.",
        profileImage: "https://via.placeholder.com/150", // Replace with actual image URL
        stats: {
            posts: 120,
            followers: 5230,
            following: 180,
        },
    };

    // Populate Profile Data
    const profileName = document.querySelector(".profile-name");
    const profileUsername = document.querySelector(".text-muted");
    const profileBio = document.querySelector(".profile-bio");
    const profileImage = document.querySelector(".profile-img");
    const statsCards = document.querySelectorAll(".stats-card p.fs-2");

    profileName.textContent = userProfile.name;
    profileUsername.textContent = userProfile.username;
    profileBio.textContent = userProfile.bio;
    profileImage.src = userProfile.profileImage;
    statsCards[0].textContent = userProfile.stats.posts;
    statsCards[1].textContent = userProfile.stats.followers.toLocaleString();
    statsCards[2].textContent = userProfile.stats.following;

    // Edit Profile Button Event
    const editProfileButton = document.querySelector(".btn-primary");
    editProfileButton.addEventListener("click", function () {
        alert("Edit Profile feature is coming soon!"); // Replace with actual edit logic
    });

    // Log out confirmation
    const logoutLink = document.querySelector("a.text-danger");
    logoutLink.addEventListener("click", function (event) {
        event.preventDefault();
        const confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            alert("Logged out successfully!");
            window.location.href = "login.html"; // Redirect to login page
        }
    });
});
