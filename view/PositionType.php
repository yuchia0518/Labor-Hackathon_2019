<?php
    include("../controllers/MemberController.php");
?>

<!DOCTYPE html>
<?php
	include ("../controllers/JobController.php");
	$career_ID = $_GET["id"];
	$jfun = $_GET["mod"];
	$jcat = $_GET["cat"];
	if ($career_ID !=null && $jfun =='getJobType') {
		$jJob = getJobType($career_ID);
	}

?>
<html>
	<head>

		<meta charset="UTF-8">
		<title>職位類型</title>
		<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link href="./css/aos.css" rel="stylesheet">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/jquery.canvasjs.min.js"></script>
		<script src="./js/aos.js"></script>
		<!-- <script type="text/javascript" src="./script.js"></script> -->
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>

		<h1 style="margin-top: 150px; text-align:center;"><?php echo $jcat;?></h1> <hr>
		<?php
			$i = 0;

			foreach ($jJob as $key=>$a2){
				$jID = ($a2[1]);
				$jName = ($a2[2]);

		?>

		<td>

		<script src="./js/navbar.js"></script>
		<div style="margin-top: 30px; margin-left:100px; ">

			<div data-aos="zoom-in-down" >
				<div class="btn-two" style="background-color: #E63F00;  height: 200px;margin-left: 50px; margin-top: 50px; float: left;  ">
					<span style="margin-top: 50px; font-size: 35px;" >
						<a style="color:white; " href="job_description.php?id=<?=$jID?>&mod=getSelectJob&cat=<?=$jName?>"><?php print_r($a2[2]); ?></a>
					</span>
				</div>
			</div>
		</div>
	</td>

	<?php  }  ?>


	</body>
	<script>
			AOS.init({ duration: 1500 });

	</script>
</html>
