<?php
// Include database connection file
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $full_name, $email, $password_hash);

        if ($stmt->execute()) {
            header('Location: login.php');
            exit;
        } else {
            $error = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
      <div class="row login-container shadow rounded overflow-hidden">
        <!-- Right Section with Sign Up Form -->
        <div class="col-md-12 bg-white p-5">
          <div class="text-center">
            <h1 class="fw-bold">Create Account</h1>
            <p class="text-muted">Fill in the details below to create your account</p>
          </div>

          <!-- Sign Up Form -->
          <form action="signup.php" method="POST" class="mt-4">
            <div class="mb-3">
              <input
                type="text"
                name="full_name"
                class="form-control"
                placeholder="Full Name"
                required
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="yourname@email.com"
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
              <input
                type="password"
                name="confirm_password"
                class="form-control"
                placeholder="Confirm Password"
                required
              />
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="termsAndConditions"
                />
                <label class="form-check-label" for="termsAndConditions">
                  I agree to the terms and conditions
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-dark w-100">Sign Up</button>
            <div class="text-center mt-3">
              <p class="mb-0">Already have an account? <a href="login.html" class="text-decoration-none text-primary">Log in</a></p>
            </div>
          </form>

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
        </div>
      </div>
    </div>

    <br><br>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <p class="text-light text-center w-100 m-0">© ArnulfoAle 2024. All rights reserved by</p>
      </div>
    </nav>
    <!-- End of Navbar -->

    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="signup.js"></script>
  </body>
</html>

