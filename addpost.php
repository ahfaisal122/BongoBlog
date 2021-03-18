<html>
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<link href = "css/bootstrap.css" rel = "stylesheet" type = "text/css"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
<link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>Comment Box</title>
</head>
<body>
<!------------container------->

<div class="container">

<h1>BongoBlog</h1>
<!-------Wrap------------>
<div id="wrap">
<div id="main">
<div class="row">
<div class="col-md-5">
<h3 class="heading">create a blog</h3>
</div>
<div class="col-md-7">
<div id="upper_blank"></div>
</div>
</div>
</div>

<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'bongoblog');

$sql = "SELECT * FROM category ";

$result = mysqli_query($con, $sql);

?>

<!------------Form Start---------->

<div id='form'>
<div class="row">
<div class="col-md-12">

<form action="blog.php" method="post" id="commentform">

<!-- <div id="comment-name" class="form-row">
<input type = "text" placeholder = "user id" name = "u_id"  id = "name" >
</div> -->
 
<div >
    <label><span>&nbsp;</span> Category Name</label>
    <select name="category" id="comment-name" class="form-row">
         <?php while($category = mysqli_fetch_assoc($result)) :?>
        <option value="<?php echo $category['cat_id']; ?>" > <?php echo $category['Cat_title']; ?> </option>
        <?php endwhile; ?>
    </select>
     
</div>


<div id="comment-name" class="form-row">
<input type = "text" placeholder = "blog title" name = "blog_title"  id = "name" >
</div>
<div id="comment-message" class="form-row">
<textarea name = "blog" placeholder = "text" id = "comment" ></textarea>
</div>
<a href="#"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Blog"></a>

</form>

</div>
</div>
</div>
</div>


</body>
</html>
<!--
<?php
/*
session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'bongoblog');

$sql = "SELECT cat_id FROM category where cat_title='sports' ";

$result = mysqli_query($con, $sql);
$_SESSION["cat_id"] = $result;

?>

