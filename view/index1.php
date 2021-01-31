<?php
    session_start();

			if($_SESSION['acc'] != null){
        		echo '';
			}else {
				header('Location: ../index.php');
				exit;
			}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<title>就業通</title>
		<link  href="./css/bootstrap.min.css" rel="stylesheet"  type= "text/css">
		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link  href= "./css/bttn.min.css"  rel= "stylesheet "  type= "text/css">
		<!-- <link href="./css/aos.css" rel="stylesheet"> -->
		<script src="./js/jquery-1.11.1.min.js"></script>
		<!-- <script src="./js/jquery.canvasjs.min.js"></script> -->
		<!-- <script src="./js/aos.js"></script> -->
		<!-- <script type="text/javascript" src="./script.js"></script> -->
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="./js/popper.min.js" ></script>
		<script src="./js/bootstrap.min.js"></script>
	</head>
	<body>
		<script src="./js/navbar.js"></script>
		<!-- Hover #2 -->
		<script type="text/javascript">
			$(window).on('load',function(){
			$('#login_modal').modal('show');
			});

		</script>
		<!-- <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">請先登入</h5>

						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">帳號:</label>
								<input type="text" class="form-control" id="recipient-name">
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">密碼:</label>
								<input type="password" class="form-control" id="recipient-name">
							</div>
							<br>
							<a href="./signup.html"><button type="button" class="btn btn-secondary" style="margin-right: 345px;">註冊</button></a>
							<button type="button" class="btn btn-primary" onclick="loginOnclick()">登入</button>
						</form>
					</div>

				</div>
			</div>
		</div> -->
		<script type="text/javascript">
			function loginOnclick(){
			$('#login_modal').modal('hide');
			}
		</script>
		<div style="background-image:url(./index_bg/index_bg2.png); width:auto; height: 650px; background-repeat:no-repeat;" >

			<a href="./field.php"><button class="bttn-stretch bttn-lg bttn-default" style="margin-top: 270px; margin-left: 460px; font-size: 100px;">學&nbsp;門</button></a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="./CareerType.php"><button class="bttn-stretch bttn-lg bttn-default" style="font-size: 100px;">職&nbsp;缺</button></a>
		</div>
		<div style="background-image:url(./index_bg/footer.png);" style="width: auto;height: 800px; background-repeat:no-repeat;">
			<h1 style="padding-top: 80px; display: table; margin: 0 auto;">製作團隊</h1>
			<hr class="style-five">
			<div class="container" style="display: table; margin: 0 auto; ">
				<div class="row" style="height: 290px; ">

					<div class="col-sm" style="margin-top: 20px;">
						<img src="./index_bg/eating.png"  style=" border-radius: 50%; width:180px; height: 180px;">
						<div style="margin-top: 10px; position:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;怡婷</div>
					</div>
					<div class="col-sm" style="margin-top: 20px;">
						<img src="./index_bg/penny.png"  style="border-radius: 50%; width:180px; height: 180px;">
						<div style="margin-top: 10px; position:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;珮祺</div>
					</div>
					<div class="col-sm" style="margin-top: 20px;">
						<img src="./index_bg/book.png"  style="border-radius: 50%; width:180px; height: 180px;">
						<div style="margin-top: 10px; position:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;書瑜</div>
					</div>
					<div class="col-sm" style="margin-top: 20px;">
						<img src="./index_bg/willy.png"  style="border-radius: 50%; width:180px; height: 180px;">
						<div style="margin-top: 10px; position:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;祐嘉</div>
					</div>
					<div class="col-sm" style="margin-top: 20px;">
						<img src="./index_bg/yuan.png"  style="border-radius: 50%; width:180px; height: 180px;">
						<div style="margin-top: 10px; position:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;致遠</div>
					</div>

					<!-- <a href="Admin_signin.html"><button class="bttn-bordered bttn-md bttn-warning" style="margin-left: 1030px;">會員管理</button></a> -->
				</div>

			</div>

		</div>
	</body>

</body>
<script>
	AOS.init({ duration: 2000 });

</script>
</html>
