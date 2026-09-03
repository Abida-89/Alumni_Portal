<?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
      header("Location: login-page/login.php");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Premier University Alumni - Amirul Islam</title>
    <link rel="icon" href="img/puclogo.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="index.php">PUC Alumni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="jobs.html">Jobs & Internships</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Alumni Profile -->
    <div class="container">
      <div class="row g-4 mb-5">
        <div class="col-md-4 text-center">
          <img src="img/alumni3.jpg" alt="Kazi Md Amirul Islam" class="img-fluid rounded shadow-sm mb-3" />
          <h4 class="fw-bold">Kazi Md Amirul Islam</h4>
          <p><strong>Date of Birth:</strong> 21/07/1995</p>
          <p><strong>Email:</strong> amirulislam00026@gmail.com</p>
          <p><strong>LinkedIn:</strong> <a href="http://linkedin.com/in/kazi-md-amirul-islam-14395b1b7" target="_blank">Profile</a></p>
        </div>

        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-header bg-primary text-white">Educational Background</div>
            <div class="card-body">
              <p><strong>Department:</strong> Computer Science & Engineering</p>
              <p><strong>Degree:</strong> BSc. in CSE</p>
              <p><strong>Graduation Year/Batch:</strong> 2021, Batch: 29th</p>
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-header bg-success text-white">Professional Experience</div>
            <div class="card-body">
              <p><strong>Current Job:</strong> Software Engineer - L2</p>
              <p><strong>Company:</strong> Brain Station 23</p>
              <p><strong>Previous Workplaces:</strong></p>
              <ul>
                <li>W3xplorers Bangladesh (Feb 2021 - Nov 2022)</li>
                <li>Devenport (Dec 2022 - Sep 2023)</li>
              </ul>
              <p><strong>Work Experience:</strong> 4+ years</p>
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-header bg-info text-white">Additional Information</div>
            <div class="card-body">
              <p><strong>Willing to Mentor:</strong> Maybe</p>
              <p><strong>Quote:</strong> "Dream big, Work harder, Stay humble."</p>
            </div>
          </div>

          <a href="index.php" class="btn btn-outline-dark">Back to Home</a>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5 mt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
                <li><a class="text-light" href="index.php">Home</a></li>
                <li><a class="text-light" href="about.php">About</a></li>
                <li><a class="text-light" href="index.php#event">Event</a></li>
                <li><a class="text-light" href="jobs.html">Jobs & Opportunities</a></li>
                <li><a class="text-light" href="index.php#contact">Contact Us</a></li>
              </ul>
          </div>
          <div class="col-md-4">
            <h5>Address</h5>
            <address>
              Premier University Chittagong<br />
              Chittagong, Bangladesh<br />
              Phone: +880 31 1234567<br />
              Email: info@puc.ac.bd
            </address>
          </div>
          <div class="col-md-4 text-end">
            <p>&copy; 2025 Premier University Chittagong Alumni. <br>
            All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>