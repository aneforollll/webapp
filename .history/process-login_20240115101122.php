<?php
$open_connect =1;
require('connection.php');


if(isset($_POST['username_acc'])&&(isset($_POST['password_acc']))){
    $username_acc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['username_acc']));
    $password_acc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['password_acc']));
    $query_check_account = "SELECT * FROM account WHERE username_acc = '$username_acc'";
    $query_check_password = "SELECT * FROM account WHERE password_acc = '$password_acc'";
    $call_back_check_account = mysqli_query($connect, $query_check_account);
    $call_back_check_password = mysqli_query($connect, $query_check_password);
    if(mysqli_num_rows($call_back_check_account) == 1){
        $result_check_account = mysqli_fetch_assoc($call_back_check_account);
        $result_check_password = mysqli_fetch_assoc($call_back_check_password);
        if(){
            die(header('location: index.php'));
        }
        else{
            die(header('location: login.php'));
        }
    }else{
        die(header('location: login.php'));
    }
}else{
    die(header('location: login.php'));
}
?>