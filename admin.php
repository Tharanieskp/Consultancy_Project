<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.jpeg">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<img class="wave" src="img/curve.jpg" width="100%">
	<div class="container">

		<div class="login-content">
			<form method="post">
				<img src="img/avatar.svg">
				<h2 class="title py-4">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="user_name" required autocomplete="OFF">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="myInput" name="password" autocomplete="OFF" required>   
            	   </div> 
            	</div>
				<div class=myinput>
				<input type="checkbox" onclick="myFunction()"> Show Password
				</div>
				<br>
            	<input type="submit" class="btn btn-primary"  name="Sign-in" value="Login">
	<?php 

         session_start();

	include("connection1.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: feedbackcl.php");
						die;
					}
				}
			}
			
			$errors= "wrong username or password!";
			echo '<div class="alert alert-danger">'.$errors.'</div>';
		}
		else
		{
			$errors= "wrong username or password!";
			echo '<div class="alert alert-danger">'.$errors.'</div>';
		}
	}

?> 
<a role="button" href="index.html" class="btn btn-primary text-center">Back To Home</a>	
</div>
</form>
     </div>
	 <script type="text/javascript" src="js/main1.js"></script>
	 <script>
          function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
          </script>
</body>
</html>

