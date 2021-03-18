<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'bongoblog');

$name = $_POST['user'];
$pass = $_POST['password'];



$s = " select * from user_table where User_id = '$name' && Password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$_SESSION["User_id"] = $name;

if($num == 1){
	header('location:home.php');
}else{
	header('location:login.php');

}

?>