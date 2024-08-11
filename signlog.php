<?php 

include 'connection.php';

//signUp
if(isset($_POST['signUp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); 
    
  
     $checkEmail="SELECT * From `user` where `email`='$email'";
     $result=$conn->query($checkEmail);

     if($result->num_rows>0){
        header("Location: index.php?msg1=*email already exists");
        exit();
    }
     else{
        $insertQuery="INSERT INTO `user` (`name`,`email`,`password`)
                       VALUES ('$name','$email','$password')";    
                        // print_r($insertQuery); 
            if($conn->query($insertQuery)==TRUE){
                header("Location: index.php?msg2=SignUp Successfull!");
                exit();      
            }
            else{
                echo "Error:".$conn->error;
            }
     }

}

//sign-in
if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM `user` WHERE `email`='$email' and `password`='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    header("Location: index.php?lg_error_msg=*Incorrect Email or Password");
   }

}
?>