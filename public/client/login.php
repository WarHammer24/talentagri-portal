<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TalentAgri Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <h2 class="text-xl font-bold mb-4 text-center">Client Login</h2>

        <form method="POST" action="/client/login.php">
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
                class="bg-green-600 text-white w-full py-2 rounded hover:bg-green-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>
