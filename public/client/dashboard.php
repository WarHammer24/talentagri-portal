<?php
session_start();

// If user is not logged in, redirect to login
if (!isset($_SESSION['client_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Client Dashboard</title>
</head>
<body>

<h2>Welcome to the Client Dashboard</h2>
<p>You are logged in successfully.</p>

<a href="logout.php">Logout</a>

</body>
</html>
