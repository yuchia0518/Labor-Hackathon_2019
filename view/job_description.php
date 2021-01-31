./js/navbar.js<?php
    include("../controllers/MemberController.php");
?>

<!DOCTYPE html>
<?php
	include ("../controllers/JobController.php");
	$jPosition_ID = $_GET["id"];
	$jfun = $_GET["mod"];
	$jcat = $_GET["cat"];

	if ($jPosition_ID !=null && $jfun =='getSelectJob') {
		$jSelectJob = getSelectJob($jPosition_ID);
		$jRecDep = getRecommandDepart($jPosition_ID);
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>工作職缺</title>
		<h1 style="margin-top: 150px; text-align:center;"><?php echo $jcat;?></h1> <hr>
		<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<!-- <link  href= "./job_description_style.css"  rel= "stylesheet "  type= "text/css"> -->
		<link href="./css/aos.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/jquery.canvasjs.min.js"></script>
		<script src="./js/aos.js"></script>
		<!-- <script type="text/javascript" src="./script.js"></script> -->
		<script type="text/javascript" src="./js/job_description_script.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<script src="./js/navbar.js"></script>

		<table id="job_form" class="display" style="width:80%; margin-top: 20px;">
        <thead>
            <tr>
                <th onclick="sortTable(0)" style="font-size: 20px; cursor: pointer; width:20%;">職務名稱</th>
                <th onclick="sortTable(1)" style="font-size: 20px; cursor: pointer; width:20%;">公司名稱</th>
                <th onclick="sortTable(2)" style="font-size: 20px; cursor: pointer; width:15%;">學歷</th>
                <th onclick="sortTable(3)" style="font-size: 20px; cursor: pointer; width:15%;">經歷</th>
                <th onclick="sortTable(4)" style="font-size: 20px; cursor: pointer; width:15%;">工作地區</th>
                <th onclick="sortTable(5)" style="font-size: 20px; cursor: pointer; width:15%;">截止日</th>
            </tr>
        </thead>
        <tbody>
					<?php
						$jnum = count($jSelectJob);
						foreach ($jSelectJob as $key=>$a1){
							$jID=$a1[1];
					?>

					<tr>
						 <td><a href="job_description_detail.php?id=<?=$jID?>&mod=getJobDetail"><?php echo $a1[2]; ?></a></td>
						 <td><?php echo $a1[14]; ?></td>
						 <td><?php echo $a1[11]; ?></td>
						 <td><?php echo $a1[10]; ?></td>
						 <td><?php echo $a1[8]; ?></td>
						 <td><?php echo $a1[6]; ?></td>
				 </tr>
					<?php
							}
						?>
            </tbody>
        <tfoot>
            <tr>
                <th style="font-size: 20px;">職務名稱</th>
                <th style="font-size: 20px;">公司名稱</th>
                <th style="font-size: 20px;">學歷</th>
                <th style="font-size: 20px;">經歷</th>
                <th style="font-size: 20px;">工作地區</th>
                <th style="font-size: 20px;">截止日</th>
            </tr>
        </tfoot>
    </table>
		<table >
			<div style="text-align:center; "><b style="font-size: 20px;">推薦相關學門：</b>

			<?php
				$jnum = count($jSelectJob);
				foreach ($jRecDep as $key=>$a2){
					$jPID=$a2[1];
					$jPName=$a2[2];
			?>


				<a  href="society_field.php?s=<?=$jPID?>&name=<?=$jPName?>"><input type ="button" class="btn btn-primary" value="<?php echo $jPName; ?>"></a>

			<?php
					}
				?>
				</div>
		</table>
		<br><h6 style="margin-top: 10px; text-align:center;"><input type ="button"  class="btn btn-primary" style="margin-top:10px;" onclick="history.back()" value="回到上一頁"></input></h6>
	</body>
</html>
