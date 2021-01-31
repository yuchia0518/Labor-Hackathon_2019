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

		<meta charset="UTF-8">
		<title>註冊會員</title>
		<link href="./css/bootstrap.min.css"  rel="stylesheet" type= "text/css">
		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link  href= "./css/signup_style.css"  rel= "stylesheet "  type= "text/css">
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<!-- <script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
	</head>
	<body>
		<script src="./js/navbar_guest.js"></script>
		<div class="container" style="margin-top: 120px;">
			<div class="row">
				<div class="col-md-8">
					<section>
						<h1 class="entry-title"><span style="font-size: 25px;">註冊就業通</span> </h1>
						<hr>
						<form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" action="../controllers/MemberController.php">
							<input type="hidden" name="action" value="signup" >
							<div class="form-group">
								<label class="control-label col-sm-3">註冊帳號 <span class="text-danger">*</span></label>
								<div class="col-md-8 col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="text" class="form-control" name="emailid" id="emailid" placeholder="請輸入6~16字元" value="" required="required">
									</div>
									<!-- <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> --> </div>
								</div>

								<div class="form-group">
									<label class="control-label col-sm-3">設定密碼 <span class="text-danger">*</span></label>
									<div class="col-md-5 col-sm-8">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="password" id="password" placeholder="請輸入6~16字元" value="" required="required">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-sm-3">確定密碼 <span class="text-danger">*</span></label>
									<div class="col-md-5 col-sm-8">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="請輸入6~16字元" value="" required="required">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">姓名 <span class="text-danger">*</span></label>
									<div class="col-md-8 col-sm-9">
										<input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="請輸入姓名" value="" required="required">
										<p>
										</div>
										<label class="control-label col-sm-3">Email <span class="text-danger">*</span></label>
										<div class="col-md-8 col-sm-9">
											<input type="email" class="form-control" name="email" id="email" placeholder="請輸入email" value="" required="required">
											<p>
											</div>
											<label class="control-label col-sm-3">身分證字號 <span class="text-danger">*</span></label>
											<div class="col-md-8 col-sm-9">
												<input type="text" class="form-control" name="idcard" id="idcard" placeholder="請輸入身分證字號" value="" required="required" style="text-transform:uppercase;">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-3">出生年月日 <span class="text-danger">*</span></label>
											<div class="col-xs-8" style="margin-left: 30px;">
												<div class="form-inline">
													<div class="form-group">
														<select name="dd" class="form-control" required="required">
															<option value="">Date</option>
															<option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
														</div>
														<div class="form-group">
															<select name="mm" class="form-control" required="required">
																<option value="">Month</option>
																<option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
															</div>
															<div class="form-group" >
																<select name="yyyy" class="form-control" required="required">
																	<option value="0">Year</option>
																	<option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-3">性別 <span class="text-danger">*</span></label>
														<div class="col-md-8 col-sm-9">
															<label>
																<input name="gender" type="radio" value="Male" required="required">
															男性 </label>

															<label>
																<input name="gender" type="radio" value="Female" required="required">
															女性 </label>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-3">連絡電話 <span class="text-danger">*</span></label>
														<div class="col-md-5 col-sm-8">
															<div class="input-group">
																<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
																<input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="請輸入常用電話" value="" required="required">
															</div>
														</div>
													</div>



													<div class="form-group">
														<label for="exampleFormControlSelect1">請選擇畢業學門</label>
														<select class="form-control" id="college-list" name="college-list" onchange="changeCollege(this.selectedIndex)">

														</select>
														<br>
														<label for="exampleFormControlSelect1">請選擇畢業科系</label>
													<select  class="form-control" id="sector-list" name="sector-list" ></select>
												</div>
												<div class="form-group">
													<label for="exampleFormControlSelect1">請選擇月薪</label>
													<select class="form-control" name="salary">
														<option value="1">20000~25000元</option>
														<option value="2">25001~30000元</option>
														<option value="3">30001~35000元</option>
														<option value="4">35001~40000元</option>
														<option value="5">40001~45000元</option>
														<option value="6">45001~50000元</option>
														<option value="7">50001~55000元</option>
														<option value="8">55001~60000元</option>
														<option value="9">60000以上</option>

													</select>

												</div>



												<div class="form-group">
													<div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger"></span> </div>
												</div>
												<div style="border: dotted;"></div>
												<div class="form-group">
													<div class="col-xs-offset-3 col-xs-10" style="float: left; margin-top:20px;">
														<input name="Submit" type="submit" value="送出註冊" class="btn btn-primary">
													</div>
													<div class="col-xs-offset-3 col-xs-10" style="float: left; margin-left:60px; margin-top:20px;">
														<input type="reset" value="清除表單" class="btn btn-secondary">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>

								<div style="margin-bottom: 100px;">
								</div>

							</body>
							<script type="text/javascript">
							var colleges=['教育學門','藝術學門','人文學門','設計學門','社會及行為科學學門','傳播學門','商業及管理學門','法律學門','生命科學學門','自然科學學門','數學及統計學門','電算機學門','工程學門','建築及都市規劃學門','農業科學學門','獸醫學門','醫藥衛生學門','社會服務學門','民生學門','運輸服務學門'];
							var collegeSelect=document.getElementById("college-list");
							var inner="";
							for(var i=0;i<colleges.length;i++){
								inner=inner+'<option value=i>'+colleges[i]+'</option>';

							}
							collegeSelect.innerHTML=inner;


							var sectors=new Array();
							sectors[0]=['綜合教育學類',
							'普通科目教育學類',
							'專業科目教育學類',
							'學前教育學類',
							'成人教育學類',
							'特殊教育學類',
							'教育行政學類',
							'教育科技學類',
							'教育測驗評量學類',
							'其他教育學類'
							];
								sectors[1]=['美術學類',
							'雕塑藝術學類',
							'美術工藝學類',
							'音樂學類',
							'戲劇舞蹈學類',
							'視覺藝術學類',
							'綜合藝術學類',
							'民俗藝術學類',
							'應用藝術學類',
							'藝術行政學類'
							];
								sectors[2]=['台灣語文學類',
							'中國語文學類',
							'外國語文學類',
							'其他語文學類',
							'翻譯學類',
							'語言學類',
							'宗教學類',
							'歷史學類',
							'人類學學類',
							'哲學學類',
							'文獻學學類',
							'其他人文學類'
							];
              sectors[3]=['綜合設計學類',
							'視覺傳達設計學類',
							'產品設計學類',
							'空間設計學類',
							'其他設計學類',
							];
							sectors[4]=['經濟學類',
							'政治學類',
							'社會學類',
							'民族學類',
							'心理學類',
							'地理學類',
							'區域研究學類',
							'公共行政學類',
							'國際事務學類',
							'綜合社會及行為科學學類'
							];
							sectors[5]=['一般大眾傳播學類',
							'新聞學類',
							'廣播電視學類',
							'公共關係學類',
							'博物館學類',
							'圖書資訊檔案學類',
							'圖文傳播學類',
							'廣告學類',
							'其他傳播及資訊學類'
              ];
							sectors[6]=['一般商業學類',
							'會計學類',
							'企業管理學類',
							'貿易學類',
							'財務金融學類',
							'風險管理學類',
							'財政學類',
							'行銷與流通學類',
							'醫管學類',
							'其他商業及管理學類'
							];
							sectors[7]=['一般法律學類',
							'專業法律學類',
							'其他法律學類'
						  ];
							sectors[8]=['生物學類',
							'生態學類',
							'生物科技學類',
							'微生物學類',
							'生物化學學類',
							'生物訊息學類',
							'其他生命科學類'
							];
							sectors[9]=['化學學類',
							'地球科學學類',
							'物理學類',
							'大氣科學學類',
							'海洋科學學類',
							'天文及太空科學學類',
							'其他自然科學學類'
              ];
							sectors[10]=['數學學類',
							'統計學類',
							'其他數學及統計學類'
              ];
              sectors[11]=['電算機一般學類',
							'網路學類',
							'軟體發展學類',
							'系統設計學類',
							'電算機應用學類',
							'其他電算機學類'
              ];
							sectors[12]=['電資工程學類',
							'機械工程學類',
							'土木工程學類',
							'化學工程學類',
							'材料工程學類',
							'工業工程學類',
							'紡織工程學類',
							'測量工程學類',
							'環境工程學類',
							'河海工程學類',
							'生醫工程學類',
							'核子工程學類',
							'綜合工程學類',
							'其他工程學類'
              ];
							sectors[13]=['建築學類',
							'景觀設計學類',
							'都巿規劃學類',
							'其他建築及都巿規劃學類'
              ];
							sectors[14]=['一般農業學類',
							'畜牧學類',
							'園藝學類',
							'植物保護學類',
							'農業經濟及推廣學類',
							'食品科學類',
							'水土保持學類',
							'農業化學類',
							'農業技術學類',
							'林業學類',
							'漁業學類',
							'其他農林漁牧學類'
              ];
              sectors[15]=['獸醫學類'
              ];
              sectors[16]=['醫學學類',
							'公共衛生學類',
							'藥學學類',
							'復健醫學學類',
							'營養學類',
							'護理學類',
							'醫學技術及檢驗學類',
							'牙醫學類',
							'其他醫藥衛生學類'
              ];
              sectors[17]=['身心障礙服務學類',
							'老年服務學類',
							'社會工作學類',
							'兒童保育學類',
							'其他社會服務學類'
              ];
              //從這裡開始加
              sectors[18]=['餐旅服務學類',
							'觀光休閒學類',
							'競技運動學類',
							'運動科技學類',
							'運動休閒及休閒管理學類',
							'生活應用科學學類',
							'服飾學類',
							'美容學類',
							'其他民生學類'
              ];
              sectors[19]=['運輸管理學類',
							'航空學類',
							'航海學類'
              ];
							function changeCollege(index){
								var Sinner="";
								for(var i=0;i<sectors[index].length;i++){
									Sinner=Sinner+'<option value="'+sectors[index][i]+'">'+sectors[index][i]+'</option>';
								}
								var sectorSelect=document.getElementById("sector-list");
								sectorSelect.innerHTML=Sinner;
							}
							changeCollege(document.getElementById("college-list").selectedIndex);
							</script>
						</html>
