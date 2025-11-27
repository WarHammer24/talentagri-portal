<?php
session_start();

// Block access if client is NOT logged in
if (!isset($_SESSION["client_logged_in"])) {
    header("Location: /public/client/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Client Dashboard</title>
</head>
<body>
    <h1>Welcome to the Client Dashboard</h1>

    <p>You are logged in successfully.</p>

    <a href="/public/client/logout.php">Logout</a>
</body>
</html>
