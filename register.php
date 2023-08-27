<?php
require 'database.php';  
$error_arr = array('firstname'=> '', 'lastname'=>'', 'email'=>'', 'mobile'=>'');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_POST['firstname']))
	{
		$error_arr['firstname']="Please Enter First name";
	}
	elseif(!preg_match("/^[A-Za-z\s]+$/", $_POST['firstname']))
	{
		$error_arr['firstname'] = "Enter Valid First name";
	}
	else
	{
		$firstname = $_POST['firstname'];
	}

	if(empty($_POST['lastname']))
	{
		$error_arr['lastname']="Please Enter Last name";
	}
	elseif(!preg_match("/^[A-Za-z\s]+$/", $_POST['lastname']))
	{
		$error_arr['lastname'] = "Enter Valid Last name";
	}
	else
	{
		$lastname = $_POST['lastname'];
	}

	if(empty($_POST['email']))
	{
		$error_arr['email'] = "Please Enter email";
	}
	elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$error_arr['email'] = "Please Enter Valid Email";
	}
	else
	{
		$email = $_POST['email'];
	}


	if(empty($_POST['mobile']))
	{
		$error_arr['mobile']="Please Enter Mobile name";
	}
	elseif(!preg_match("/^\d{10}$/", $_POST['mobile']))
	{
		$error_arr['mobile'] = "Enter Valid Mobile number";
	}
	else
	{
		$mobile = $_POST['mobile'];
	}

	if(array_filter($error_arr))
	{
	}
	else
	{
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	$ency_pass = base64_encode($password);
    $address = $_POST['address'];
	$package = $_POST['package'];
    $gender = $_POST['gender'];



    if($password == $cpassword){
        $sql = "INSERT INTO `register` (`firstname`, `lastname`, `email`, `mobile`, `address`, `gender`, `package`, `password`) VALUES ('$firstname','$lastname', '$email', '$mobile', '$address', '$gender', '$package', '$ency_pass')";
        $result=mysqli_query($conn, $sql);
        if($result){
            $insert = true;
            header('location: login.php');
        }
        else{
                echo "Not able to connect . mysqli_error";
        }
    } 
    else{
        echo "Pasword does not match";
    } 
	
	}
}

          
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Tour Registration</title>
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
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style>
	body {
		color: #fff;
		background-image: url("images/register1.jpg");
		/* background: #19aa8d; */
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 1000px;
		margin: 0 auto;
		padding: 1px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
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

<div class="signup-form">
    <form action="register.php" method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="firstname" placeholder="Firstname" >
				<span style="color:red;"><?php echo $error_arr['firstname'];?></span>
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="lastname" placeholder="Lastname">
				<span style="color:red;"><?php echo $error_arr['lastname'];?></span>
			</div>
        </div>
       
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address">
				<span style="color:red;"><?php echo $error_arr['email'];?></span>
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				<input type="tel" class="form-control" name="mobile" placeholder="Mobile" >
				<span style="color:red;"><?php echo $error_arr['mobile'];?></span>
			</div>
        </div>
      
		<div class="form-group">
			<div class="input-group">
            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
      <input type="textarea" class="form-control" id="address" placeholder="Enter address" name="address" required>
		</div>
        <div class="form-group">
        <label><b>Gender :</b></label><br>  
        <input type="radio" value="Male" id="gender" name="gender" checked > Male   
        <input type="radio" value="Female" id="gender" name="gender"> Female   
        <input type="radio" value="Other" id="gender"  name="gender"> Other   
        </div>
		<div>  
		<label>   
		<b>PACKAGES:</b>
		</label>   
		<select id="package" name="package" class="form-select" style="font-size: 14px;">  
		<option value="Taj Mahal">Taj Mahal</option>  
		<option value="Dubai">Dubai</option>  
		<option value="Bali">Bali</option>  
		<option value="Goa">Goa</option>  
		<option value="Dalhousie">Dalhousie</option>  
		<option value="Switzerland">Switzerland</option>  
		</select>  
		</div> 
		<br>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Enter a new Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" class="form-control" name="cpassword" oninput = "conformationpwd()" placeholder="Enter Password again" required="required">
				<span id ="password_error"></span>	
			</div>
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<script>
		function conformationpwd()
		{
			var x = document.getElementById('password').value;
			var y = document.getElementById('cpassword').value;

			if(x!=y)
			{
				document.getElementById('password_error').innerHTML = "Password doesn't Match!";
			}
			else
			{
				document.getElementById('password_error').innerHTML = "";
			}
		}
		</script>
	<div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
<script>
	$(document).ready(function(){
		// To register
		$('#register-btn').click(function(){
			e.preventDefault();
			alert("Ready to login!!");
			$('#content').load('login.php');
		});
	});
</script>
</body>

</html>
