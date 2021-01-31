<?php
    include("../controllers/MemberController.php");

?>
<!DOCTYPE html>
<?php
	include ("../controllers/JobController.php");
	// include ("test3.php");
	$jJob_ID = $_GET["id"];
	$jfun = $_GET["mod"];
	// $jcat = $_GET["cat"];

	if ($jJob_ID !=null && $jfun =='getJobDetail') {
		$jSelectJob = getJobDetail($jJob_ID);

	}

?>

<html>
	<head>
		<meta charset="UTF-8">
    <?php
      // $jSelectJob = getSelectJob(1,"1705");
      $jnum = count($jSelectJob);
      // $d1 = getChart("14");
      foreach ($jSelectJob as $key=>$a1){
        $jID=$a1[1];


    ?>



		<title>工作職缺</title>
		<h1 style="margin-top: 150px; text-align:center;"><b><?php echo $a1[2];?></b></h1> <hr>
		<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<!-- <link  href= "./css/job_description_style.css"  rel= "stylesheet "  type= "text/css"> -->
		<link href="./css/aos.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/jquery.canvasjs.min.js"></script>
		<script src="./js/aos.js"></script>
		<!-- <script type="text/javascript" src="./script.js"></script> -->
		<script type="text/javascript" src="./js/job_description_script.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>

		<script src="./js/navbar.js"></script>

		<table id="job_form" class="display" style="width:60%; margin-top: 20px; border:3px #80CEFF dashed;">

        <tbody>


					<tr>
            <td style="font-weight:bold; width:15%" bgcolor="#BDE6FF">職務名稱</td>
            <td style="width:35%" bgcolor="#F5FBFF"><?php echo $a1[2]; ?></td>
            <td style="font-weight:bold; width:15%" bgcolor="#BDE6FF">職位類別名稱</td>
            <td style="width:35%" bgcolor="#F5FBFF"><?php echo $a1[3]; ?></td>
          </tr>

          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">名額</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[4]; ?></td>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">截止日</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[6]; ?></td>
          </tr>


          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">工作內容</td>
            <td colspan="3" bgcolor="#F5FBFF"><?php echo $a1[7]; ?></td>
          </tr>

          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">地點</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[8]; ?></td>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">日/夜/輪班</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[9]; ?></td>
          </tr>

          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">資歷</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[10]; ?></td>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">學歷條件</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[11]; ?></td>
          </tr>

          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">日/周/月薪</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[12]; ?></td>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">薪水</td>
            <td bgcolor="#F5FBFF"><?php echo $a1[13]; ?></td>
          </tr>

          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">企業</td>
            <td colspan="3" bgcolor="#F5FBFF"><?php echo $a1[14]; ?></td>
          </tr>

          <tr>
            <td style="font-weight:bold;" bgcolor="#BDE6FF">超連結</td>
            <td colspan="3" bgcolor="#F5FBFF">
							<a  href="<?=$a1[15]?>"><?php echo $a1[15]; ?></a>
						</td>
          </tr>

					<?php
							}
						?>


            </tbody>
        <tfoot>

        </tfoot>
    </table>

    <h6 style="margin-top: 10px; text-align:center;"><input type ="button"  class="btn btn-primary"  style="margin-top:10px;" onclick="history.back()" value="回到上一頁"></input></h6> <hr>


    <tr>
        <!-- <th colspan="4" style="font-size: 20px;">返回</th> -->


    </tr>





	</body>



</html>
