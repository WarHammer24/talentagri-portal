<?php
session_start();

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // TEMP LOGIN (we will connect real database later)
    $validEmail = "client@example.com";
    $validPassword = "password123";

    if ($email === $validEmail && $password === $validPassword) {

        $_SESSION["client_logged_in"] = true;
        header("Location: /public/client/dashboard.php");
        exit;

    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Client Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
    <h2 class="text-xl font-bold mb-4 text-center">Client Login</h2>

    <?php if (!empty($error)): ?>
        <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <input
            type="email"
            name="email"
            placeholder="Email"
            class="w-full p-2 border rounded mb-3"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            class="w-full p-2 border rounded mb-3"
            required
        >

        <button
            type="submit"
            class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
            Login
        </button>
    </form>
</div>

</body>
</html>
