<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vector Hospital</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
   <!-- Header section -->
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
  <a class="navbar-brand" href="index.php"><i class="bi bi-hospital"></i> Vector</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.html"><i class="bi bi-telephone-fill"></i> contact_us</a>
      </li>
    </ul>
    <span class="navbar-text">
  <a href="register.php" class="btn btn-success mr-2"><i class="bi bi-person-fill-add"></i> Register</a>
</span>

  </div>
</nav>
<!-- End of header section -->

<!-- Hero Section -->
<div class="jumbotron bg-custom" id="hero">
  <div class="row justify-content-around align-items-center">
      <div class="col-md-6">
        <h2> Welcome to Vector Hospital </h2>
        <p>Vector Hospital is committed to providing world-class healthcare with a patient-centered approach. 
           Our team of expert doctors and medical staff work tirelessly to ensure the well-being of every patient. 
           With state-of-the-art facilities and compassionate care, we strive to make healthcare accessible and reliable for everyone.
        </p>
        <p>Visit our clinic for expert HealthCare!!</p>
        <a href="register.php" class="btn btn-success"><i class="bi bi-person-lines-fill"></i> Join us</a>
      </div>
      <div class="col-md-6">
        <img src="s2.jpg" class="img-fluid" alt="Vector Hospital">
      </div>
  </div>
</div>

<!-- Services Section -->
<div class="container" id="services">
  <h1 class="text-center">Our <span>Services</span></h1>
  <hr class="bg-danger" style="width:250px; margin:auto;">
  <div class="row text-center mt-4">
    
    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-heart-pulse-fill" style="font-size:2.5rem;color:#28a745;"></i>
          <h5 class="card-title mt-3">Cardiology</h5>
          <p class="card-text">Comprehensive heart care with modern diagnostics.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-activity" style="font-size:2.5rem;color:#28a745;"></i>
          <h5 class="card-title mt-3">Neurology</h5>
          <p class="card-text">Advanced brain and nervous system treatments.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-people-fill" style="font-size:2.5rem;color:#28a745;"></i>
          <h5 class="card-title mt-3">Pediatrics</h5>
          <p class="card-text">Child healthcare services and immunizations.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <i class="bi bi-hospital-fill" style="font-size:2.5rem;color:#28a745;"></i>
          <h5 class="card-title mt-3">Emergency</h5>
          <p class="card-text">24/7 emergency care for all critical situations.</p>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- End of Services Section -->

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
