<?php

if($open_connect !=1){
	die(header('location: index.php'));
}


$hostname ='localhost';
$username ='root';
$password ='';
$database ='healthalert+';
$port='NULL';
$socket='NULL';
$connect = mysqli_connect($hostname,$username,$password,$database);

if(!$connect){
	die(mysqli_connect_error($connect));
}else{
	mysqli_set_charset($connect, 'utf8');
}

?>