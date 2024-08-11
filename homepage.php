<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>

<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT * FROM `user` WHERE `email`='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['name'];
        }
       }
       ?>
            :)
        </p>
        <button><a href="logout.php">Logout</a></button>
    </div>
    <center>
    <a href="changepass.php">Change Password</a>
    </center>



</body>

</html>