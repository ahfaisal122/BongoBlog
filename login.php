 <html>
 <head>
       <title> User Login And SignUp </title>
	   <link rel="stylesheet" type="text/css"
	   href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	   
</head>
<body>

<div class="container">
     <div class="row">
	 <div class="col-md-6">
	      <h2> Login Here </h2>
		  <form action="validation.php" method="post">
		    <div class="form-group">
		      <label>Username</label>
			  <input type="text" name="user" class="form-control" required>
			  </div>
		  <div class="form-group">
		      <label>Password</label>
			  <input type="password" name="password" class="form-control" required>
			  </div>
			  <button type="submit" class="btn btn-primary"> Login </button>

          </form>
     </div>

          <div class="col-md-6">
	      <h2> SignUp Here </h2>
		  <form action="signup.php" method="post">
		    <div class="form-group">
		      <label>Username</label>
			  <input type="text" name="user" class="form-control" required>
			  </div>
		  <div class="form-group">
		      <label>Password</label>
			  <input type="password" name="password" class="form-control" required>
			  </div>
			  <button type="submit" class="btn btn-primary"> SignUp </button>

          </form>
     </div>
	 </div>



 </div>
</body>
</html>