<?php
$open_connect =1;
require('connection.php');

if(isset($_POST['username_acc'])&&isset($_POST['password_acc'])){
   $username_acc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['username_acc']));
   $password_acc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['password_acc']));
   $query_check_username_acc ="SELECT username_acc FROM account WHERE username_acc = '$username_acc'";
   $call_back_query_check_username_acc = mysqli_query($connect,$query_check_username_acc);
   if(mysqli_num_rows($call_back_query_check_username_acc)>0){
    die(header('location: signup.php'));
   }else{
    $query_create_account ="INSERT INTO account VALUES ('','$username_acc','$password_acc','member')";
    $call_back_create_account = mysqli_query($connect,$query_create_account);
    if($call_back_create_account){
        die(header('location: login.php'));
    }else{
        die(header('location: signup.php'));
    }
   }
}else{
    die(header('location: signup.php'));
}

?>