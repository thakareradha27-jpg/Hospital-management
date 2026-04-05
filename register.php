<?php 
include('db_connect.php');

if(isset($_POST["rgbutton"]))
{
    $Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $Contact = $_POST['Phone_Number'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Blood = $_POST['Blood_Group'];
    $Password = $_POST['Password'];

    // SQL query
    $sql = "INSERT INTO `users`(`id`, `Name`, `Email`, `Contact`, `Age`, `Gender`, `Blood`, `Password`) 
            VALUES (NULL, '$Name', '$Email', '$Contact', '$Age', '$Gender', '$Blood', '$Password')";

    // Execute query
    if ($conn->query($sql) === TRUE) 
    {
        echo "<script>alert('Registration successful!');</script>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration - Vector Hospital</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS for register -->
    <link rel="stylesheet" href="register.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand bg-custom">
  <a class="navbar-brand" href="index.html"> <i class="bi bi-hospital"></i> Vector </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html"> <i class="bi bi-house-door-fill"></i> Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php"><i class="bi bi-person-plus-fill"></i> Register</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Register Form Section -->
<div class="container register-container">
  <div class="row justify-content-center">
    <div class="col-md-7 mb-4">
      <div class="card register-card shadow-sm">
        <div class="card-header"><i class="bi bi-person-plus-fill"></i> Patient Registration</div>
        <div class="card-body">
       <form method="POST" action="register.php">

            
            <div class="form-group">
              <label for="regName">Full_Name</label>
              <input type="text" class="form-control" id="regName" name="Full_Name"placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="regEmail">Email</label>
              <input type="email" class="form-control" id="regEmail" name="Email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="regPhone">Phone_Number</label>
              <input type="tel" class="form-control" id="regPhone" name="Phone_Number" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
              <label for="regAge">Age</label>
              <input type="number" class="form-control" id="regAge" name="Age" placeholder="Enter your age" required>
            </div>
            <div class="form-group">
              <label for="regGender">Gender</label>
              <select class="form-control" id="regGender" name="Gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="regBlood">Blood_Group</label>
              <select class="form-control" id="regBlood" name="Blood_Group">
                <option value="">Select Blood Group</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
              </select>
            </div>
           
           
            <div class="form-group">
              <label for="regPassword">Password</label>
              <input type="password" class="form-control" id="regPassword" name="Password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block" name="rgbutton" >Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center text-white bg-success p-3 mt-5">
    &copy; 2025 Vector Hospital. All Rights Reserved.
</footer>

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
