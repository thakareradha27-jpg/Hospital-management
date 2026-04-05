<?php
session_start();

//  Database connection
$conn = new mysqli("localhost", "root", "", "hospital");
// ❗ Replace "hospital" with your actual database name

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//  Get data from login.html form
$username = $_POST['username'];
$password = $_POST['password'];

//  Check login_data table
$sql = "SELECT * FROM login_data WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

//  If login is correct
if ($result->num_rows == 1) {

    // Start session for logged user
    $_SESSION['username'] = $username;

    //  Redirect to home page (index.php)
    header("Location: index.php");
    exit();

} else {

    // ✅ Wrong login → show alert and go back to login page
    echo "<script>alert('Invalid Username or Password'); 
    window.location.href='login.html';
    </script>";
}

?>
