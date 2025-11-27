<?php
session_start();

// If user is NOT logged in, redirect back to login page
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">
    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Welcome to the Client Dashboard</h1>

        <p class="mb-4">You are successfully logged in.</p>

        <a href="/public/client/logout.php" 
           class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Logout
        </a>
    </div>
</body>
</html>
