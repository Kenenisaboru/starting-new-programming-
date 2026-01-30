<?php
if (!isset($_COOKIE["loggedin"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_COOKIE["username"]; ?> 🎉</h2>
    <p>You are logged in using cookies.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
