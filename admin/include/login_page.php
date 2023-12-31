<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Panel</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--== FAV ICON ==-->
	<link rel="shortcut icon" href="images/fav.ico">
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
	
	<!-- FONT-AWESOME ICON CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<!--== ALL CSS FILES ==-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mob.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/materialize.css"/>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="blog-login">
		<div class="blog-login-in">
			<?php
			if (isset($_SESSION['error_msg'])) {
				echo $_SESSION['error_msg'];
				unset($_SESSION['error_msg']);
			}
			if (isset($_SESSION['success_msg'])) {
				echo $_SESSION['success_msg'];
				unset($_SESSION['success_msg']);
			}
			?>
			<form action="include/login.php" method="post">
				<!--<img src="images/logo1.png" alt=""/ style="height:110px;width:110px;">-->
				<div class="row">
					<div class="input-field col s12">
						<input id="username" type="text" class="validate" name="username" required>
						<label for="username">Username : </label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="password" required>
						<label for="password">Password : </label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<button type="submit" name="submit_button" class="waves-effect waves-light btn-large btn-block">
							   Login
						</button>
					</div>
				</div>
				<!--				<a href="forgot_password.php" class="for-pass">Forgot Password ?</a>-->
			</form>
		</div>
	</div>
	
	<!--======== SCRIPT FILES =========-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>