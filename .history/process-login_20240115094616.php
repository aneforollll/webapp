<?php
$open_connect =1;
require('connection.php');


if(isset($_POST['username_acc'])&&(isset($_POST['password_acc']))){
    $username_acc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['username_acc']));
    $password_acc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['password_acc']));
    $query_check_account = "SELECT * FROM account WHERE username_acc = '$username_acc'";
    $call_back_check_account = mysqli_query($connect, $query_check_account);
    if(mysqli_num_rows($call_back_check_account) == 1){
        $result_check_account = mysqli_fetch_assoc($call_back_check_account);
        $hash = $result_check_account['password_acc'];
        if(password_verify($password_acc , $hash)){
            die(header('location: index.php'));
        }else{
            die(header('location: login.php'));
        }
    }else{
        die(header('location: login.php'));
    }
}else{
    die(header('location: login.php'));
}
?>