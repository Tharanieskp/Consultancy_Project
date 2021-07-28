<?php 
session_start();

	include("connection1.php");
	include("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
<title>Signup Form</title>
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
            	<input type="submit" class="btn btn-primary"  name="Sign-in" value="Signup">
				<a role="button" href="admin.php" class="btn btn-primary">Go To Login</a>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
          {   
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "jaithindaltiles";
            $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
             
              $username = $_POST['user_name'];
              $password = $_POST['password'];
              $sql_u = "SELECT * FROM admin WHERE user_name ='$username'";
              $sql_e = "SELECT * FROM admin WHERE password ='$password'";
              $res_u = mysqli_query($con, $sql_u);
              $res_e = mysqli_query($con, $sql_e);
          
              if (mysqli_num_rows($res_u) > 0) {
                $name_error = "Username Already Exist"; 
                echo '<div class="alert alert-danger">'.$name_error.'</div>';	
              }
              else if(mysqli_num_rows($res_e) > 0){
                $password_error = "Password Already Exist"; 
                echo '<div class="alert alert-danger">'.$password_error.'</div>';	
              }
              elseif(!empty($user_name) && !empty($password))
                {
                  $password_error = "Sorry... password already taken"; 
                  echo '<div class="alert alert-danger">'.$password_error.'</div>';	
                }
            else{
              $user_id = random_num(5);
              $query = "insert into admin (user_id,user_name,password) values ('$user_id','$username','$password')";

              mysqli_query($con, $query);

              header("Location: admin.php");
              die;
            }
          }
       ?>
            </form>
        </div>
    </div>
    <div>		
</div>
			<!--script js-->
			<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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

