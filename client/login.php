<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Login | Talent Agri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-agri-light min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white shadow-agri rounded-xl p-10 w-full max-w-md border border-agri-light">
        
        <h1 class="text-2xl font-bold text-agri-dark mb-6 text-center">
            Talent Agri Client Portal
        </h1>

        <form>
            <label class="block mb-2 font-semibold text-agri-dark">Email</label>
            <input type="email" class="w-full mb-4 px-3 py-2 border rounded-lg" placeholder="Enter your email">

            <label class="block mb-2 font-semibold text-agri-dark">Password</label>
            <input type="password" class="w-full mb-4 px-3 py-2 border rounded-lg" placeholder="Enter your password">

            <button class="w-full bg-agri-dark text-white py-2 rounded-lg hover:bg-agri-mid transition">
                Login
            </button>
        </form>

    </div>

</body>
</html>
