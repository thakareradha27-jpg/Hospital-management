<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Database error: " . $conn->connect_error);
}

$patient_name = $_POST['patient_name'];
$doctor_name = $_POST['doctor_name'];
$appointment_date = $_POST['appointment_date'];
$time_slot = $_POST['time_slot'];

$sql = "INSERT INTO appointment (patient_name, doctor_name, appointment_date, time_slot)
        VALUES ('$patient_name', '$doctor_name', '$appointment_date', '$time_slot')";

if ($conn->query($sql)) {
    echo "<script>alert('Appointment booked successfully'); window.location.href='appointment_form.html';</script>";
} else {
    echo "<script>alert('Error booking appointment'); window.location.href='appointment_form.html';</script>";
}

$conn->close();
?>
