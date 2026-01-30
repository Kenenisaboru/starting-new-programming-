<?php
// Simple hard-coded credentials
$correct_username = "admin";
$correct_password = "1234";

$username = $_POST["username"];
$password = $_POST["password"];

if ($username === $correct_username && $password === $correct_password) {
    // Set cookie for 1 hour
    setcookie("loggedin", "true", time() + 3600);
    setcookie("username", $username, time() + 3600);

    header("Location: dashboard.php");
    exit();
} else {
    echo "Login failed ❌ <a href='login.php'>Try again</a>";
}
?>
