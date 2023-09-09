<?php
session_start();

// Define your admin username and password (in a real application, this would be stored securely)
$adminUsername = "admin";
$adminPassword = "admin123";

// Get the submitted username and password from the form
$username = $_POST["username"];
$password = $_POST["password"];

// Check if the submitted credentials match the admin credentials
if ($username === $adminUsername && $password === $adminPassword) {
    // Valid credentials; you can set a session variable to indicate successful login
    $_SESSION["admin_logged_in"] = true;
    
    // Redirect to the admin dashboard or another authorized page
    header("Location: dashboard.html");
    exit();
} else {
    // Invalid credentials; redirect back to the login page with an error message
    header("Location: adminlogin.php?error=1");
    exit();
}
?>
