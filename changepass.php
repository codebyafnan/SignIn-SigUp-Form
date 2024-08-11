<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    <title>change password</title>
</head>
<body>
    <div class="container" id="signup" >
        <h2 class="form-title">Change Password</h2>
        <form action="reset_pass.php" method="POST" class="signIn">
            <label for="currentPassword">Current Password:</label>
            <input type="password" id="currentPassword" name="currentPassword" required><br>
            <br>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required><br>
            <br>
            <label for="confirmNewPassword">Confirm NewPassword:</label>
            <input type="password" id="confirmNewPassword" name="confirmNewPassword" required><br>
            <span style="color:red;">
                    <?php $newpass = isset($_REQUEST['newpass']) ? $_REQUEST['newpass']:'';
                    echo $newpass;?>
                    
                    <?php $current_pass = isset($_REQUEST['current_pass']) ? $_REQUEST['current_pass']:'';
                    echo $current_pass;?>

                    <?php $confrim_pass = isset($_REQUEST['confrim_pass']) ? $_REQUEST['confrim_pass']:'';
                    echo $confrim_pass;?>
            </span><br><br>
            <button type="submit" name="change">Change Password</button>
        </form>
    </div>
</body>
</html>