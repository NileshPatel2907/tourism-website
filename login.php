<?php
require 'database.php';  
session_start(); 
	if (isset($_SESSION['login'])){
		header('location: preview.php');
	}

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = $_POST['email'];
    $password = $_POST['password'];

	$sql = "SELECT * FROM `register` WHERE email='$email'";
	$result = mysqli_query($conn, $sql); 
	$num = mysqli_num_rows($result);

	if ($num>0){
		$row = mysqli_fetch_array($result);
		$fetch_password = $row['password'];
		$decy_pass = base64_decode($fetch_password);

		if($password == $decy_pass)
		{
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['email'] = $email;
			echo 'session started';
			header("location: preview.php");     
		}
		else{
			echo "ERROR";
		}
	}
	else{
		echo "invalid credential";
	}


 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login page</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
		font-family: 'Varela Round', sans-serif;
		background-image: url("images/login1.jpg");
        /* background: #19aa8d; */
			

	}
	.modal-login {
		color: #636363;
		width: 400px;
		margin: 200px auto;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;        
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 50px;
		border-radius: 3px; 
        
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #00ce81;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
		
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 20px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}
	
</style>
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">TOURISM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
      </ul>
       
      </form> 
    </div>
  </div>
</nav>


	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title"><b>Login</b></h4>
			</div>
			<div class="modal-body">
				<form action="login.php" method="post">
					<div class="form-group">
						<i class="fa fa-paper-plane"></i>
						
						<input type="email" class="form-control" name="email" placeholder="Enter your Email Address" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<a href = "preview.php">
						<input type="submit"class="btn btn-primary btn-block btn-lg" value="Login" >
						</a>
					</div>
				</form>				
				
			</div>
			<div class="modal-footer">
            <div class="text-center">Are you a new user ? <a href="register.php">Register here</a></div>
			</div>
		</div>
	</div>
</div>     
</body>
</html>