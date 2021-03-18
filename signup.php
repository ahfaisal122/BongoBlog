<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'bongoblog');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from user_table where User_id = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Username already taken";
}else{
	$reg= " insert into user_table(User_id , Password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";

}

?>