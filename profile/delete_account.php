<?php
    session_start();
    include('../login-page/connect.php');

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../login-page/login.php');
        exit;
    }
    $user_id = $_SESSION['user_id'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        // After deleting, destroy session and redirect
        session_unset();
        session_destroy();
        header('Location: ../index.php');
        exit;
    } 
    else {
        echo "Error deleting account.";
    }
?>
