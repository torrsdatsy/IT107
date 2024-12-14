<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Skill Hunt</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" href="SKhuntdashboard.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="settings.html">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="login.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container my-5">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="fw-bold">Welcome, [User's Name]!</h1>
          <p class="text-muted">Your personalized dashboard to manage skills and opportunities.</p>
        </div>
      </div>
      <div class="row mt-4">
        <!-- Example Section -->
        <div class="col-md-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Recommended Skills</h5>
              <p class="card-text">
                Explore trending skills and enhance your expertise.
              </p>
              <a href="#" class="btn btn-primary">View Recommendations</a>
            </div>
          </div>
        </div>
        <!-- Example Section -->
        <div class="col-md-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Job Opportunities</h5>
              <p class="card-text">
                Find jobs that match your skill set and interests.
              </p>
              <a href="#" class="btn btn-primary">Browse Jobs</a>
            </div>
          </div>
        </div>
      </div>

      <!-- More Dynamic Content -->
      <div class="row mt-4">
        <div class="col-md-12">
          <h3>Recent Activity</h3>
          <ul class="list-group">
            <li class="list-group-item">Completed JavaScript Course</li>
            <li class="list-group-item">Applied for Frontend Developer Role</li>
            <li class="list-group-item">Updated Profile Picture</li>
        </ul>
        
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-3 mt-auto">
      <div class="container text-center">
        <p class="m-0">© ArnulfoAle 2024. All rights reserved.</p>
      </div>
    </footer>

    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="SKhuntdashboard.js"></script>
  </body>
</html>