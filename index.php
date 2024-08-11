<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up & Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Sign up -->
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Sign up</h1>
        <form method="post" action="signlog.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Name" required>
                <label for="name">Name</label>
            </div><br>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label><br>
                <span style="color:red;">
                    <?php $msg1 = isset($_REQUEST['msg1']) ? $_REQUEST['msg1']:'';
                echo $msg1;
                
                $signup = isset($_REQUEST['sign']) ? $_REQUEST['signup']:'';
                echo $signup;
                ?>

                </span>
            </div><br>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="links" style="color:green;  font-size:1rem;font-weight:bold;">
                <?php $msg2 = isset($_REQUEST['msg2']) ? $_REQUEST['msg2']:'';
              echo $msg2;?>
            </div>
            <br>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <!-- Sign In -->

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="signlog.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div><br>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <span style="color:red;">
                <?php $lg_error_msg = isset($_REQUEST['lg_error_msg']) ? $_REQUEST['lg_error_msg']:'';
                echo $lg_error_msg;?>
            </span><br><br>
            <p class="recover">
                <a href="forgot-password.php">Forgotten password?</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></Script>

</body>

</html>