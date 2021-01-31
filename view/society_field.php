<?php
    include("../controllers/MemberController.php");

?>
<?php
	include "../controllers/DepartController.php";
	$chart = $_GET['s'];
	$chartName = $_GET['name'];
	$degree1 = getBSChart($chart);
	$degree2 = getMSChart($chart);
	$recommandBS = getBSRecommand($chart);
	$recommandMS = getMSRecommand($chart);
	$a1 = array();
	$b1 = array();
	$c1 = array();
	$d1 = array();
	$a2 = array();
	$b2 = array();
	$c2 = array();
	$d2 = array();
	$num1 = count($degree1);
	$num2 = count($degree2);
	$num_1 = count($recommandBS);
	$num_2 = count($recommandMS);
	$i = 0;
	$j = 0;
	foreach ($degree1 as $key=>$a){
		$a1[$i] = $a[1];
		$b1[$i] = $a[2];
		$c1[$i] = $a[3];
		$d1[$i] = $a[4];
		$i = $i+1;
	}
	foreach ($degree2 as $key2=>$b){
		$a2[$j] = $b[1];
		$b2[$j] = $b[2];
		$c2[$j] = $b[3];
		$d2[$j] = $b[4];
		$j = $j+1;
	}
	//學士推薦職位代碼、名稱
	$str3 = "";
	for($w=0;$w<$num_1;$w++){
		$str2 = "";
		$num3 = count($recommandBS[$w]);
		for($y=1;$y<=$num3;$y++){
				$str = "";

				$str = $str.$recommandBS[$w][$y][0].",";
				$str = $str."\"".$recommandBS[$w][$y][1]."\"".",";
				$str = substr($str, 0, strlen($str)-1);
				$str2 = $str2."[$str]".",";
		}
		$str2 = substr($str2, 0, strlen($str2)-1);
		$str3 = $str3."[$str2]".",";
	}
	$str3 = substr($str3, 0, strlen($str3)-1);
//碩士推薦職位代碼、名稱
	$str6 = "";
	for($w2=0;$w2<$num_2;$w2++){
		$str5 = "";
		$num4 = count($recommandMS[$w2]);
		for($y2=1;$y2<=$num4;$y2++){
				$str4 = "";

				$str4 = $str4.$recommandMS[$w2][$y2][0].",";
				$str4 = $str4."\"".$recommandMS[$w2][$y2][1]."\"".",";
				$str4 = substr($str4, 0, strlen($str4)-1);
				$str5 = $str5."[$str4]".",";
		}
		$str5 = substr($str5, 0, strlen($str5)-1);
		$str6 = $str6."[$str5]".",";
	}
	$str6 = substr($str6, 0, strlen($str6)-1);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $chartName;?></title>
	  <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link href="./css/aos.css" rel="stylesheet">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/jquery.canvasjs.min.js"></script>
		<script src="./js/aos.js"></script>

		<!--<script type="text/javascript" src="./script.js"></script>
		 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
		<script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<!-- <button id="master_salary_daytime"  class="dropdown-item">日間部</button> -->
		<script src="./navbar.js"></script>
		<div class="field_title"><b><?php echo $chartName;?></b></div>

		<div class="btn-group btn-group-lg" role="group" aria-label="" style="display: table; margin: 0 auto; margin-top: 20px;">
			<button id="college_salary" type="button" class="btn btn-secondary" style=" border-right: double;">學士</button>
			<button id="master_salary" type="button" class="btn btn-secondary" style=" border-right: double;">碩士</button>

		</div>
	</div>
	<div data-aos="fade-up" id="chartContainer3" style=" width: 100%; margin-top: 70px;">
	</div>
	<div class="modal fade" id="field_column_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content" style="width: 780px; height: 700px;">
				<div class="modal-header">
				<!--	<h5 class="modal-title" id="exampleModalLabel">心理學系</h5> -->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<!-- <span aria-hidden="true">&times;</span> -->
					</button>
				</div>
				<div class="modal-body" >
				 <div data-aos="fade-up" id="piechartContainer">

					</div>
            <p style="margin-top:510px; color: #444444; font-family:monospace; font-size:18px; font-weight:bold;">
              推薦相關職位:
            </p>
						<div id = "createButton">
				</div>
			</div>
			<div class="modal-footer" style="background-color: white; width: 780px;">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<div>

				</div>
			</div>
		</div>
	</div>


</div>


<!-- <div data-aos="zoom-in" id="chartContainer2" style="height: 700px; width: 100%; overflow-x: scroll; margin-top: 50px;"> </div> -->


</body>
<script>
	AOS.init({ duration: 1200 });
	function a(){
		alert("test");
	}
</script>

<script type="text/javascript">
	window.onload = function(){
		var temp1 = ["<?php echo join("\",\"", $b1); ?>"];
		var temp1_2 = ["<?php echo join("\",\"", $a1); ?>"];
		var temp1_em = ["<?php echo join("\",\"", $c1); ?>"];
		var temp1_unem = ["<?php echo join("\",\"", $d1); ?>"];
		var temp2_1 = ["<?php echo join("\",\"", $b2); ?>"];
		var temp2_2 = ["<?php echo join("\",\"", $a2); ?>"];
		var temp2_em = ["<?php echo join("\",\"", $c2); ?>"];
		var temp2_unem = ["<?php echo join("\",\"", $d2); ?>"];
		var num1 =  <?php echo $num1;?>;
		var num2 =  <?php echo $num2;?>;
		var arr1 = new Array();
		var arr2 = new Array();
		var arr3 = new Array();
		var arr4 = new Array();
		arr3 = [<?php echo $str3; ?>];
		arr4 = [<?php echo $str6; ?>];
	//	var arr3 = new Array();
		for (var i=0;i<num1;i++){
			arr1.push({y:parseInt(temp1[i]),label:temp1_2[i]});
		}

		for (var j=0;j<num2;j++){
			arr2.push({y:parseInt(temp2_1[j]),label:temp2_2[j]});
		}
		//alert(arr3[0][1][1]);


		    var piechart_title = "";
		    //預設進入 大學部
		    var options = new CanvasJS.Chart("chartContainer3", {
		        title: { text: "學士平均薪資" },
		        subtitles: [{ text: "2018" }],
		        animationEnabled: true,
		        dataPointWidth: 40,
		        axisX: { labelAngle: 180 },
		        data: [{
		            type: "column",
		            click: onClick1,
		            startAngle: 40,
		            toolTipContent: "<b>{label}</b>: {y}元",
		            indexLabelFontSize: 13,
		            indexLabel: "{y}元",
		            dataPoints: arr1
		        }]
		    });
		    options.render();
		    // 學士
		        $("#college_salary").click(function() {
		            var options = new CanvasJS.Chart("chartContainer3", {
				                title: { text: "學士平均薪資" },
				                subtitles: [{ text: "2018" }],
				                animationEnabled: true,
				                dataPointWidth: 40,
				                axisX: { labelAngle: 180 },
				                data: [{
				                    type: "column",
				                    click: onClick1,
				                    startAngle: 40,
				                    toolTipContent: "<b>{label}</b>: {y}元",
				                    indexLabelFontSize: 13,
				                    indexLabel: "{y}元",
				                    dataPoints: arr1
				                }]
		            	 });
		            options.render();
		            $("#chartContainer3").CanvasJSChart(options);
		        });

		    // 碩士班 日間部
		        $("#master_salary").click(function() {
		            var options = new CanvasJS.Chart("chartContainer3", {
				                title: { text: "碩士平均薪資" },
				                subtitles: [{ text: "2018" }],
				                animationEnabled: true,
				                dataPointWidth: 40,
				                axisX: { labelAngle: 180 },
				                data: [{
				                    type: "column",
				                    click: onClick2,
				                    startAngle: 40,
				                    toolTipContent: "<b>{label}</b>: {y}元",
				                    indexLabelFontSize: 13,
				                    indexLabel: "{y}元",
				                    dataPoints: arr2
				                }]
		            		});
		            options.render();
		            $("#chartContainer3").CanvasJSChart(options);
		        });





		    $("#chartContainer3").CanvasJSChart(options);

		    // 這個onclick方法要呼叫Modal

		    function onClick1(e) { //學士的onclick
					 // alert(e.dataPoint.label);
					 	var buttons="";
					  var index = e.dataPoint.x;
					 	var pieName = e.dataPoint.label;
						var piechart1 = new CanvasJS.Chart("piechartContainer", {
				        exportEnabled: true,
				        animationEnabled: true,
				        title: {
				            text: e.dataPoint.label
				        },
				        legend: {
				            cursor: "pointer",
				            itemclick: explodePie
				        },
				        width: 750,
				        height: 500,
				        data: [{
				            type: "pie",
				            showInLegend: true,
				            toolTipContent: "{name}: <strong>{y}%</strong>",
				            indexLabel: "{name} - {y}%",
				            dataPoints: [{
				                    y: temp1_em[index],
				                    name: "已就業",
				                    exploded: true
				                }, {
				                    y: temp1_unem[index],
				                    name: "未就業"
				                }

				            ]
				        }]
				    });
				    piechart1.render();
		        $('#field_column_Modal').modal('show');
						// for (var i = 1; i <= arr3[index].length; i++) {
						// var btn = document.createElement("BUTTON");
						// var t = document.createTextNode(arr3[index][i][1]);
						// btn.appendChild(t);
						// document.body.appendChild(btn);
						// }

						document.getElementById('createButton').innerHTML="";

						for(var i = 0;  i < arr3[index].length; i++){
						 	var id =  arr3[index][i][0];
 							var cat = arr3[index][i][1];
 						buttons = $('<a href="'+'./job_description.php?id='+id+'&mod=getSelectJob&cat='+cat+'\"'+'><button class="btn btn-primary" style=" margin-left:5px;">' + cat + '</button></a>');
						 //buttons = $('<button class="btn btn-primary" style="margin-top:550px;">' + arr3[index][i][1] + '</button>');
							buttons.appendTo('#createButton');
						}

		    }

				function onClick2(e) { //碩士的onclick
					// alert(e.dataPoint.label);
					 var buttons="";
					 var index = e.dataPoint.x;
					 var pieName = e.dataPoint.label;
					 var piechart1 = new CanvasJS.Chart("piechartContainer", {
							 exportEnabled: true,
							 animationEnabled: true,
							 title: {
									 text: e.dataPoint.label
							 },
							 legend: {
									 cursor: "pointer",
									 itemclick: explodePie
							 },
							 width: 750,
							 height: 500,
							 data: [{
									 type: "pie",
									 showInLegend: true,
									 toolTipContent: "{name}: <strong>{y}%</strong>",
									 indexLabel: "{name} - {y}%",
									 dataPoints: [{
													 y: temp2_em[index],
													 name: "已就業",
													 exploded: true
											 }, {
													 y: temp2_unem[index],
													 name: "未就業"
											 }

									 ]
							 }]
					 });
					 piechart1.render();
					 $('#field_column_Modal').modal('show');
					 document.getElementById('createButton').innerHTML="";

					 for(var i = 0;  i < arr4[index].length; i++){
					//	 alert(arr4[index][i][0]);
						 var id =  arr4[index][i][0];
						 var cat = arr4[index][i][1];
						buttons = $('<a href="'+'./job_description.php?id='+id+'&mod=getSelectJob&cat='+cat+'\"'+'><button class="btn btn-primary" style=" margin-left:5px;">' + cat + '</button></a>');
					//	buttons = $('<input type ="button" class="btn btn-primary" style="margin-top:550px;" onclick="javascript:location.href='+'"\'"./job_description.php?id'+id+'&mod=getSelectJob&cat='+cat+'\''+ 'value='+"\""+cat+"\""+'></input>');
					//	buttons = $('<input type ="button"  class="btn btn-primary" style="margin-top:550px;" onclick='+'"\""javascript:location.href='+'"\'http://www.wibibi.com"\''+' value='+'"\""回到 Wibibi 首頁"\""'+'></input>');
						 buttons.appendTo('#createButton');
					 }
			 }

		function explodePie(e) {
		    if (typeof(e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
		    } else {
		        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
		    }
		    e.chart.render();

		}

		// 捲軸事件
		// js
		var windowHeight = window.innerHeight,
		    gridTop = windowHeight * 0.2,
		    gridBottom = windowHeight * 0.8;
		$(window).on('scroll', function() {
		    $('button.btn_animation').each(function() {
		        var thisTop = jQuery(this).offset().top - $(window).scrollTop();
		        if (thisTop >= gridTop && (thisTop + $(this).height()) <= gridBottom) {
		            $(this).addClass('demo_animated');
		        } else {
		            $(this).removeClass('demo_animated');
		        }
		    });
		});

		$(window).trigger('scroll');


		// 卷軸到到指定區塊

		$('#column').click(function() {
		    $('html,body').animate({
		        scrollTop: $('#chartContainer2').offset().top
		    }, 800);
		});

		$('#pieChart').click(function() {
		    $('html,body').animate({
		        scrollTop: $('#chartContainer1').offset().top
		    }, 800);

		}); //代表一個完整的執行區塊


}



	// function myFunction() {
	// 	alert("tw");
	// 	for (i = 1; i <= arr3[index].length; i++) {
	// 	var btn = document.createElement("BUTTON");
	// 	var t = document.createTextNode(arr3[index][i][1]);
	// 	btn.appendChild(t);
	// 	document.body.appendChild(btn);
	// 	}
	// }


</script>
</html>
