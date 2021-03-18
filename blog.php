<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'bongoblog');

//$b_id = 1;Blog_id '$b_id',
$b_title = $_POST['blog_title'];
$b_text = $_POST['blog'];
//$b_cat = $_POST['blog_category'];


if(isset($_SESSION['User_id']))

{
	$uname = $_SESSION["User_id"];
}

/*if(isset($_SESSION['cat_id']))

{
	$catid = $_SESSION["cat_id"];
}
*/

$s = " INSERT INTO blog(Blog_title,Blog_text,User_id) VALUES ( '$b_title', '$b_text', '$uname')";

 mysqli_query($con, $s);


?>