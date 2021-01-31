<?php
    session_start();

			if(isset($_SESSION['acc'])){
        		header('Location: ./view/index1.php');
				exit;
			}else {
				echo '';
			}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<title>登入就業通</title>
		<link rel="stylesheet" src="./css/bootstrap.min.css">
    <!-- <script src="./js/bootstrap.min.js" ></script> -->
		<link  src= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link  src= "./css/bttn.min.css"  rel= "stylesheet "  type= "text/css">


		<!-- <script src="./js/popper.min.js" ></script> -->

		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="Login_v12/images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v12/css/util.css">
		<link rel="stylesheet" type="text/css" href="Login_v12/css/main.css">
		<!--===============================================================================================-->

	</head>
	<body>


		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-190 p-b-30">


					<span class="login100-form-title p-t-20 p-b-45">
						<h2>就業通</h2>
					</span>
					<form class="login100-form" action="controllers/MemberController.php" method="post">
						<input type="hidden" name="action" value="login">
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
							<input class="input100" type="text" name="username" placeholder="Username"  required="required">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							<input class="input100" type="password" name="pass" placeholder="Password"  required="required">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="container-login100-form-btn p-t-10">
							<button class="login100-form-btn" type="submit">

							Login

							</button>
						</div>
					</form>
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="view/forgetAccount.php" class="txt1">
							忘記帳號
						</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="view/forgetPassword.php" class="txt1">
							忘記密碼
						</a><br><br><br><br>
						<a class="txt1" href="view/signup.php">
							創建就業通帳號
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>



			</div>
		</div>
	</div>
	<!--===============================================================================================-->
	<script src="Login_v12/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login_v12/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v12/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login_v12/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login_v12/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-23581568-13');

	</script>



</body>
</html>
