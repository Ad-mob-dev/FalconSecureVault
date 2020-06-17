<!DOCTYPE html>
<html lang="en">
<head>
	<title>Falcon Secure Vault</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
<?php
session_start();
if(isset($_SESSION["uemail"])){		
	echo " <div class='row w-100 m-auto'><div class='col-md-3 alert alert-primary text-black text-center'> 
	<i class='fa fa-user-secret fa-2x text-center'> </i> </div>";
	echo "<div class='col-md-6  alert alert-danger'> 
	<h5 class='text-center'> Youre Already Logged In !! Log out To go back to login Page <h5> </div>";
	echo "<div class='col-md-3  alert alert-info text-center'> 
	<i class='fa fa-arrow-circle-o-right fa-2x d-inline  text-black'> </i></div></div>";
	echo "<div class='text-center '><img class='mt-5' src='images/checkx.png' width= '250px' height='250px'> <h4 class='mt-5'> You're Already Signed In
	<br> Click Here to <a href='logout.php' class='fa-1x text-primary badge badge-light'>Log out</a></h4></div>";
	echo "<script> window.navigator.href ='userprofile.php'</script>";
	exit();
}else{
	echo "<script> window.navigator.href ='index.php'</script>";
}
?>

</head>
<body>
	<!-- login front -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-10 p-b-10">
				<form class="login100-form validate-form" method="POST" action="index.php">
					<span class="login100-form-title p-b-20 text-danger" style="font-size:35px;">
						Falcon <span class="text-dark"> Secure </span>  <span class="text-warning">Vault</span>
					</span>
					<!-- avatar -->
					<span class="login100-form-avatar">
						<img src="images/login.webp" alt="AVATAR">
					</span>
					<!-- input username -->
					<div class="wrap-input100 validate-input m-t-40 m-b-35" data-validate = "Enter email">
						<input class="input100" type="text"  id="email" name="email" value="">
						<span class="focus-input100" data-placeholder="abc@example.com"></span>
					</div>
					<!-- input password -->
					<div class="wrap-input100 validate-input m-b-30" data-validate="Enter password">
						<input class="input100" type="password" id="pass" name="pass" value="">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
	
					<!-- login Button -->
					<div class="container-login100-form-btn">
						<input class="login100-form-btn btn-outline-danger text-white" type="submit" id="submit" name="submit" value="login" >
					</div>
					<!-- forgot password -->
					<ul class="login-more p-t-20 text-center">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="userRegistry.php" class="txt2">
								Sign up
							</a>
						</li>
					</ul>

					<!-- user auth and login -->
					<?php
						require_once('login.php');
					?>
					
				</form>
			</div>
		</div>
	
	</div>

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


