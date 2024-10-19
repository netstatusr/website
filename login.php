<?php
session_start();

// Replace with your credentials
$valid_username = "wahlberg";
$valid_password = "command";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Successful login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        // Failed login
        header("Location: login.html?error=Invalid credentials, gtfo.");
        exit();
    }
}
?>
