<?php
    session_start();
    include('../login-page/connect.php');

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../login-page/login.php');
        exit;
    }

    // Fetch user data from login's database
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = $userId";  // Assuming your user table is 'users' and primary key is 'id'
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } 
    else {
        echo "User not found!";
        exit;
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hash new password if user entered it
        if (!empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $updateQuery = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', password='$hashedPassword' WHERE id=$userId";
        } 
        else {
            // If no password entered, don't update password
            $updateQuery = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email' WHERE id=$userId";
        }

        if ($conn->query($updateQuery)) {
            // Update successful
            $_SESSION['firstName'] = $firstName; // Update session name too
            header('Location: dashboard.php'); // Redirect back to dashboard
            exit;
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Account</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-4">Edit Account</h2>
            
            <div class="row justify-content-center">              
                <div class="col-md-6">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password (leave blank if not changing)</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" name="update" class="btn btn-primary w-100">Update Account</button>
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>