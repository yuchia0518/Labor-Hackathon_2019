<?php
    session_start();

			if(isset($_SESSION['acc'])){
        		header('Location: ./index1.php');
				exit;
			}else {
				echo '';
			}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<title>就業通 - 忘記密碼</title>
		<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link  href= "./css/bttn.min.css"  rel= "stylesheet "  type= "text/css">
		<link href="./css/aos.css" rel="stylesheet">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/jquery.canvasjs.min.js"></script>
		<script src="./js/aos.js"></script>
		<script type="text/javascript" src="./script.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="../Login_v12/images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../Login_v12/css/util.css">
		<link rel="stylesheet" type="text/css" href="../Login_v12/css/main.css">
		<!--===============================================================================================-->
		<!-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/3F9610C6-C549-3E46-A474-6C5C4E61E83D/main.js" charset="UTF-8"></script> -->
		<style type="text/css">
			.alert{
				display: none;
				}
		</style>
	</head>
	<body>
		<div class="alert alert-warning alert-dismissable" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
			<span aria-hidden="true">&times;
				</button>
				<strong>管理人員已經在處理，請靜待信箱通知。</strong>
			</div>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('../Login_v12/images/img-01.jpg');">
				<div class="wrap-login100 p-t-190 p-b-30">
					<form class="login100-form" method="post" action="../controllers/MemberController.php">
                        <input type="hidden" name="action" value="forgetpassword">

						<span class="login100-form-title p-t-20 p-b-45">
							<h2>就業通 - 忘記密碼</h2>
						</span>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
							<input class="input100" type="text"  placeholder="身分證字號" name="id">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							<input class="input100" type="text" placeholder="帳號" name="account">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							<input class="input100" type="email" placeholder="Email" name="email">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							 <input class="input100" type="tel" placeholder="手機號碼" name="phone">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="container-login100-form-btn p-t-10">
							<button class="login100-form-btn" id="submit_forgetAccount" type="submit">

								送出

							</button>
						</div>
						<div class="text-center w-full p-t-25 p-b-230">
							<a href="../index.php" class="txt1">
								回到登入
							</a>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="forgetAccount.php" class="txt1">
								忘記帳號
							</a><br><br><br><br>
							<a class="txt1" href="signup.php">
								創建就業通帳號
								<i class="fa fa-long-arrow-right"></i>
							</a>
						</div>


					</form>
				</div>
			</div>
		</div>
		<!--===============================================================================================-->
		<script src="../Login_v12/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="../Login_v12/vendor/bootstrap/js/popper.js"></script>
		<script src="../Login_v12/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="../Login_v12/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="../Login_v12/js/main.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');


		//顯示彈出視窗，管理人員處理中.....
			$(document).ready(function(){
				$('button').click(function(){
				$('.alert').show();
				});
			});
		</script>



	</body>
</html>
