<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SkillHunt</title>
    <!-- Include Bootstrap CSS -->
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="try.css" />
    <!-- Your custom styles -->
</head>
<body class="bg-dark">
    <div class="blur-overlay"></div>
    <div
        class="container d-flex flex-column justify-content-center align-items-center min-vh-100"
    >
        <!-- Image hidden initially -->
        <img
            src="imageforproject/facebook.png"
            alt="SkillHunt Logo"
            class="skill-image hidden mb-4"
        />
        <a class="btn btn-outline-light btn-lg btn-shine mb-4">Welcome to SkillHunt</a>
        <a
            href="login.php"
            class="continue-link text-white text-decoration-underline"
        >Click here to continue</a>
    </div>

    <!-- Include Bootstrap JS (optional for interactive components) -->
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
