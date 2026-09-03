<?php
    session_start();
    include 'connect.php'; // Include DB connection

    // Handle login
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Fetch the user record from the database
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Verify the password using password_verify()
            if (password_verify($password, $row['password'])) {
                // Set session for the logged-in user (storing user_id)
                $_SESSION['user_id'] = $row['id'];  // Ensure 'id' is the correct column name for user ID in your DB
                $_SESSION['email'] = $row['email']; // Storing email is optional
                $_SESSION['firstName'] = $row['firstName']; 
                
                header("Location: ../index.php");  // Redirect to homepage after successful login
                exit();
            } 
            else {
                echo "Incorrect Email or Password";
            }
        } 
        else {
            echo "User not found!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" id="login">
            <h1 class="form-title">Log in</h1>
            <form method="post" action="login.php"> <!-- Submit to self -->
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                
                <p class="recover">
                    <a href="#">Forgot Password?</a>
                </p>
                
                <input type="submit" class="btn" value="Log in" name="login">
            </form>

            <p class="or">-------or-------</p>

            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>

            <div class="links">
                <p>Don't have an account yet?</p>
                <a href="register.php"><button>Sign Up</button></a>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>
