<?php
    session_start();
    include('../login-page/connect.php');

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../login-page/login.php'); // Redirect to login if user is not logged in
        exit;
    }

    // Check if firstName is set, if not set a default value
    $firstName = isset($_SESSION['firstName']) ? $_SESSION['firstName'] : 'Guest';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard</title>
        <!-- Include your stylesheets and other head elements -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">

        <!-- Navbar -->
        <nav class="bg-gray-900 text-white py-4">
            <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
                <a href="../index.php" class="text-xl font-semibold">PUC Alumni Portal</a>

                <form action="delete_account.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This cannot be undone.');">
                    <button type="submit" class="bg-red-600 text-white hover:bg-red-700 rounded px-6 py-2 transition">Delete Account</button>
                </form>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="max-w-7xl mx-auto mt-10 px-6">
            <!-- User Icon and Greeting -->
            <div class="flex justify-center items-center flex-col space-y-4">
                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Icon" class="w-24 h-24 rounded-full">
                <h2 class="text-2xl font-bold text-gray-800">Hello, <?php echo htmlspecialchars($firstName); ?>!</h2>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-center mt-8 space-x-6">
                <!-- Edit Account Button -->
                <a href="edit_account.php" class="bg-blue-600 text-white hover:bg-blue-700 rounded px-6 py-2 transition">
                    Edit Account
                </a>
                
                <!-- Logout Button -->
                <a href="../login-page/logout.php" class="bg-red-600 text-white hover:bg-red-700 rounded px-6 py-2 transition">
                    Logout
                </a>
            </div>
        </div>

    </body>
</html>
