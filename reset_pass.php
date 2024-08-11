<?php
session_start();
include 'connection.php'; 

if (!isset($_SESSION['email'])) {
    die('Unauthorized access');
}

if (isset($_POST['change'])) {
    $email = $_SESSION['email'];
    $currentPassword = md5($_POST['currentPassword']);
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];




    // Validate new passwords match
    if ($newPassword !== $confirmNewPassword) {
        header("Location: changepass.php?newpass=*New passwords do not match to the confirmNewPassword");
        exit();
    }

            
    if ($currentPassword === md5($newPassword)) {
        header("Location: changepass.php?current_pass=*New password cannot be the same as the current password.");
        exit();
    }

    // Hash new password
    $newPassword = md5($newPassword);

    // Check current password
    $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$currentPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Update password
        $updateQuery = "UPDATE `user` SET `password`='$newPassword' WHERE `email`='$email'";
        if ($conn->query($updateQuery) === TRUE) {
            echo 'Password successfully updated';
            header('Location: index.php');
        } else {
            echo 'Error updating password: ' . $conn->error;
        }
    } else {
        header("Location: changepass.php?confrim_pass=*Current password is incorrect.");
        exit();
    }
} else {
    die('Invalid request');
}

?>
