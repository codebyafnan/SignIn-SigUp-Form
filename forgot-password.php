<?php
// include "connection.php";
  if(isset($_POST['send_code'])){

      $email = $_POST['email'];
      $message = $_POST['message'];
      $header = "From: code_by_afnan";


      if(mail($email,$message,$header)){
        echo "Email Send Successfully:)";
      }else{
        echo "Email failed to send:(";
      }
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up & Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- forgot-password-->
    <div class="container" id="signIn">
        <h1 class="form-title">Reset Password</h1>
        <form method="post">
            <br>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
                <br><br>
                <input type="text" name="message" id="msg" placeholder="message" required>
                <label for="msg">message</label>
            </div><br>
            <input type="submit" class="btn" value="send code" name="send_code">
        </form>
    </div>

</body>

</html>