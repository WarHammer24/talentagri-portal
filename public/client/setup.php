<?php
session_start();

// TEMPORARY SETUP PAGE
// This will later allow clients to register themselves.

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    if ($name !== "" && $email !== "") {
        $message = "Client '$name' with email '$email' has been recorded (placeholder only).";
    } else {
        $message = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Client Setup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 shadow-md rounded w-full max-w-md">
    <h2 class="text-xl font-bold mb-4 text-center">Client Setup</h2>

    <?php if (!empty($message)): ?>
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <input
            type="text"
            name="name"
            placeholder="Client Name"
            class="w-full p-2 border rounded mb-3"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Client Email"
            class="w-full p-2 border rounded mb-3"
            required
        >

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Save Client
        </button>
    </form>
</div>

</body>
</html>
