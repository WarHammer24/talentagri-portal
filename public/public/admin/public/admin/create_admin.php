<?php
// Connect to database
$db = new PDO('sqlite:../../database/talentagri.db');

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if ($name === "" || $email === "" || $password === "") {
        $message = "All fields are required.";
    } else {
        // Hash password
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Insert admin
        $stmt = $db->prepare("INSERT INTO admins (name, email, password) VALUES (?, ?, ?)");
        $success = $stmt->execute([$name, $email, $hash]);

        if ($success) {
            $message = "Admin account created successfully.";
        } else {
            $message = "Error: Could not create admin. Email may already exist.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Admin Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded shadow-md w-full max-w-md">

    <h2 class="text-xl font-bold mb-4 text-center">Create Admin Account</h2>

    <?php if (!empty($message)): ?>
        <div class="p-3 mb-4 rounded bg-green-200 text-green-800">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <input class="w-full p-2 border rounded mb-3"
               name="name" placeholder="Name" required>

        <input class="w-full p-2 border rounded mb-3"
               type="email" name="email" placeholder="Email" required>

        <input class="w-full p-2 border rounded mb-3"
               type="password" name="password" placeholder="Password" required>

        <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700"
                type="submit">
            Create Admin
        </button>
    </form>

</div>

</body>
</html>
