<?php
// Start session for managing login
session_start();

// Include database connection file
require 'db_connection.php';

// Initialize error message
$error = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if ($email && $password) {
        // Query the database to validate user credentials
        $stmt = $conn->prepare("SELECT password, status FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // Check if the account is active
            if ($row['status'] !== 'active') {
                $error = "Your account is not active. Please check your email for activation.";
            } else {
                // Verify the password using password_verify
                if (password_verify($password, $row['password'])) {
                    // Successful login
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $email;
                    header('Location: SKhuntdashboard.php'); // Redirect to dashboard
                    exit;
                } else {
                    $error = "Invalid email or password. Please try again.";
                }
            }
        } else {
            $error = "No account found with this email. Please register.";
        }

        $stmt->close();
    } else {
        $error = "Please fill in all fields.";
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Skill Hunt</title>
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="login.css" />
</head>
<body>

<div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="row login-container shadow rounded overflow-hidden w-100" style="max-width: 400px;">
        <!-- Login Form Section -->
        <div class="col-12 bg-white p-4">
            <div class="text-center">
                <h1 class="fw-bold">Skill Hunt</h1>
                <p class="text-muted">Enter your details to get started!</p>
            </div>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            <form action="" method="POST" class="mt-4">
                <div class="mb-3">
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="name@email.com"
                        required
                    />
                </div>
                <div class="mb-3">
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label>
                        <input type="checkbox" name="remember_me" /> Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-dark w-100">Sign in</button>
                <div class="text-center mt-3">
                    <p class="mb-0">
                        Don't have an account? <a href="signup.php" class="text-decoration-none text-primary">Sign up</a>
                    </p>
                </div>

                 <!-- Social Media Buttons -->
                <div class="text-center my-3 text-muted">or</div>
                <button class="btn btn-outline-dark w-100 mb-2 d-flex align-items-center justify-content-center google-btn">
                    <img src="imageforproject/google-logo-g-suite-google-9820d64d83b313b7a901dcc7f6052ee6.png" alt="Google Icon" style="max-height: 20px; margin-right: 8px" />
                    Continue with Google
                </button>
                <button class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center facebook-btn">
                    <img src="imageforproject/facebook.png" alt="Facebook Icon" style="max-height: 20px; margin-right: 8px" />
                    Continue with Facebook
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <p class="text-light text-center w-100 m-0">&copy; ArnulfoAle 2024. All rights reserved.</p>
    </div>
</nav>
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="login.js"></script>
</body>
</html>

