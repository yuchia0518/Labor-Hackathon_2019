<?php
    include("../controllers/MemberController.php");
?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>修改密碼</title>
		<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link  href= "./css/style.css"  rel= "stylesheet "  type= "text/css">
		<link  href= "./css/signup_style.css"  rel= "stylesheet "  type= "text/css">
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
		<script src="./js/navbar.js"></script>
		<div class="container" style="margin-top: 120px;">
			<div class="row">
				<div class="col-md-8">
					<section>
						<h1 class="entry-title"><span style="font-size: 25px;">修改會員資料</span> </h1>
						<hr>
						<form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" method="post" action="../controllers/MemberController.php">
							<input type="hidden" name="action" value="change">
							<div class="form-group">
								<label class="control-label col-sm-3">輸入舊密碼 <span class="text-danger">*</span></label>
								<div class="col-md-8 col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="password" class="form-control" name="oldpassword" id="emailid" placeholder="請輸入舊密碼" value="">
									</div>
									<!-- <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> --> </div>
								</div>

								<div class="form-group">
									<label class="control-label col-sm-3">設定新密碼 <span class="text-danger">*</span></label>
									<div class="col-md-5 col-sm-8">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="newpassword" id="password" placeholder="請輸入6~16字元" value="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3">確定新密碼 <span class="text-danger">*</span></label>
									<div class="col-md-5 col-sm-8">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input type="password" class="form-control" name="cnewpassword" id="cpassword" placeholder="請輸入6~16字元" value="">
										</div>
									</div>
								</div>
								<!-- <div class="form-group">
										<label class="control-label col-sm-3">姓名 <span class="text-danger">*</span></label>
										<div class="col-md-8 col-sm-9">
												<input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="請輸入姓名" value="">
												<p>
											</div>
											<label class="control-label col-sm-3">身分證字號 <span class="text-danger">*</span></label>
											<div class="col-md-8 col-sm-9">
													<input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="請輸入身分證字號" value="">
											</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-3">出生年月日 <span class="text-danger">*</span></label>
											<div class="col-xs-8" style="margin-left: 30px;">
													<div class="form-inline">
															<div class="form-group">
																	<select name="dd" class="form-control">
																			<option value="">Date</option>
																			<option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
																	</div>
																	<div class="form-group">
																			<select name="mm" class="form-control">
																					<option value="">Month</option>
																					<option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
																			</div>
																			<div class="form-group" >
																					<select name="yyyy" class="form-control">
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
																					<input name="gender" type="radio" value="Male">
																			男性 </label>

																			<label>
																					<input name="gender" type="radio" value="Female" >
																			女性 </label>
																	</div>
															</div>
															<div class="form-group">
																	<label class="control-label col-sm-3">連絡電話 <span class="text-danger">*</span></label>
																	<div class="col-md-5 col-sm-8">
																			<div class="input-group">
																					<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
																					<input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="請輸入常用電話" value="">
																			</div>
																	</div>
															</div>



															<div class="form-group">
																	<label for="exampleFormControlSelect1">請選擇畢業學門</label>
																	<select class="form-control" id="college-list" onchange="changeCollege(this.selectedIndex)">

																	</select>
																	<br>
																	<label for="exampleFormControlSelect1">請選擇畢業科系</label>
															<select  class="form-control" id="sector-list"></select>
													</div>
													<div class="form-group">
																<label for="exampleFormControlSelect1">請選擇月薪</label>
																<select class="form-control">
																		<option>20000~25000元</option>
																		<option>25001~30000元</option>
																		<option>30001~35000元</option>
																		<option>35001~40000元</option>
																		<option>40001~45000元</option>
																		<option>45001~50000元</option>
																		<option>50001~55000元</option>
																		<option>55001~60000元</option>
																		<option>60000以上</option>

																</select>

													</div>




											</form>
									</div>
								</div>
							</div>

							<div style="margin-bottom: 100px;">
							</div>

						</body>
						<script type="text/javascript">
						var colleges=['資訊學群','工程學群','數理化學學群','醫藥衛生學群','藝術學群','生命科學學群','生物資源學群','地球與環境學群','建築與設計學群','社會與心理學群','大眾傳播學群','外語學群','文史哲學群','管理學群','教育學群','法政學群','遊憩與運動學群','財經學群'];
						var collegeSelect=document.getElementById("college-list");
						var inner="";
						for(var i=0;i<colleges.length;i++){
							inner=inner+'<option value=i>'+colleges[i]+'</option>';
						}
						collegeSelect.innerHTML=inner;


						var sectors=new Array();
						sectors[0]=['人文與資訊學系',
						'新媒體藝術學系',
						'資訊傳播工程學系',
						'資訊傳播學系',
						'運動資訊傳播學系',
						'資訊與圖書館學系',
						'圖書資訊學系',
						'生物產業機電工程學系',
						'生物資訊學系',
						'生物機電工程學系',
						'多媒體動畫藝術學系',
						'動畫遊戲設計學系',
						'創意產業與數位電影學士學位學程',
						'媒體設計科技學系',
						'媒體設計學系',
						'媒體傳達設計學系',
						'資訊模擬與設計學系',
						'數位多媒體設計學系',
						'數位科技設計學系',
						'數位媒體設計學系',
						'教育科技學系',
						'數位媒體與文教產業學系',
						'數位學習科技學系',
						'數位學習設計與管理學系',
						'科技工程與管理學系',
						'資訊工程學系',
						'資訊科學系',
						'資訊科學與工程學系',
						'資訊創新與科技學系',
						'電腦與通訊工程學系',
						'電腦與智慧型機器人學士學位學程',
						'電機資訊學士班',
						'電機資訊學院學士班',
						'資訊科技與管理學系',
						'資訊管理學系',
						'資訊管理與財務金融學系',
						'資訊應用學系',
						'多媒體與行動商務學系',
						];
							sectors[1]=['生物產業機電工程學系',
						'自動控制工程學系',
						'科技工程與管理學系',
						'動力機械工程學系',
						'電腦與智慧型機器人學士學位學程',
						'電機工程學系',
						'電機資訊學士班',
						'電機資訊學院學士班',
						'生物機電工程學系',
						'光電工程學系',
						'光電科學與工程學系',
						'光電與通訊工程學系',
						'光電與通訊學系',
						'光電學系',
						'光機電與材料學士學位學程',
						'奈米科學及工程學士學位學程',
						'理學院學士班',
						'電子工程學系',
						'電子物理學系',
						'通訊工程學系',
						'通訊與導航工程學系',
						'工程科學及海洋工程學系',
						'工程科學系',
						'工程與系統科學系',
						'系統工程暨造船學系',
						'系統及船舶機電工程學系',
						'原子科學院學士班',
						'能源工程學系',
						'資源工程學系',
						'綠色能源科技學系',
						'輪機工程學系',
						'工學院學士班',
						'機械工程學系',
						'機械與自動化工程學系',
						'機械與電腦輔助工程學系',
						'機械與機電工程學系',
						'機電工程學系',
						'精密系統設計學士學位學程',
						'航太與系統工程學系',
						'航空太空工程學系',
						'土木工程學系',
						'土木與工程管理學系',
						'土木與水資源工程學系',
						'土木與生態工程學系',
						'土木與防災工程學系',
						'土木與環境工程學系',
						'河海工程學系',
						'測量及空間資訊學系',
						'營建管理學系',
						'水利工程與資源保育學系',
						'水利及海洋工程學系',
						'水資源及環境工程學系',
						'生物環境系統工程學系',
						'化工與材料工程學系',
						'化學工程及材料工程學系',
						'化學工程與材料工程學系',
						'化學工程與材料科學學系',
						'化學工程學系',
						'紡織工程學系',
						'材料工程學系',
						'材料科學工程學系',
						'材料科學及工程學系',
						'材料科學系',
						'材料科學與工程學系',
						'材料與光電科學學系',
						'纖維與複合材料學系',
						'牙體技術學系',
						'生物醫學工程學系',
						'生醫工程與環境科學系',
						'醫療器材設計與材料學士學位學程',
						'工業科技教育學系',
						'工業教育學系',
						'科技應用與人力資源發展學系',
						'環境工程與科學學系',
						'環境工程學系',
						'環境科學與工程學系',
						'環境與安全衛生工程學系',
						'空間設計學系',
						'室內設計學系',
						'建築及都市設計學系',
						'建築設計學系',
						'建築與都市計畫學系',
						'建築與景觀學系',
						'建築學系',
						'工業工程與工程管理學系',
						'工業工程與系統管理學系',
						'工業工程與經營資訊學系',
						'工業工程與管理學系',
						'工業管理與經營資訊學系',
						'工業管理學系',
						'工業與系統工程學系',
						'工業與資訊管理學系',
						'科技管理學位學程',
						'科技管理學系',
						'科技管理學院學士班',
						'管理科學系',
						'管理科學學系',
						'交通管理科學系',
						'物流與航運管理學系',
						'空運管理學系',
						'航運管理學系',
						'商船學系',
						'運輸科技與物流管理學系',
						'運輸科技與管理學系',
						'運輸科學系'
						];
							sectors[2]=[
							'土壤環境科學系',
						'生化科技學系',
						'農業化學系',
						'醫藥暨應用化學系',
						'財務工程與精算數學系',
						'統計資訊學系',
						'統計學系',
						'理學院學士班',
						'電腦與智慧型機器人學士學位學程',
						'數學系',
						'數學學系',
						'應用數學系',
						'化學工程與材料工程學系',
						'化學系',
						'化學暨生物化學系',
						'化學學系',
						'原子科學院學士班',
						'應用化學系',
						'應用材料及光電工程學系',
						'物理學系',
						'應用物理學系',
						'光電物理學系',
						'電子物理學系',
						'應用物理系',
						'地球環境暨生物資源學系',
						'自然科學教育學系',
						'應用物理暨化學系',
						'應用科學系',
						'數學教育學系',
						'數學暨資訊教育學系'];
						sectors[3]=['獸醫學系',
						'健康產業管理學系',
						'視光學系',
						'醫務管理暨醫療資訊學系',
						'醫務管理學系',
						'醫療資訊與管理學系',
						'中醫學系',
						'醫學系',
						'口腔衛生學系',
						'公共衛生學系',
						'健康促進與衛生教育學系',
						'牙醫學系',
						'牙體技術學系',
						'物理治療暨輔助科技學系',
						'物理治療學系',
						'職能治療學系',
						'護理學系',
						'生物醫學影像暨放射科學系',
						'生物醫學影像暨放射科學學系',
						'醫學影像暨放射科學系',
						'醫學生物技術暨檢驗學系',
						'醫學檢驗生物技術學系',
						'醫學檢驗暨生物技術學系',
						'中國藥學暨中藥資源學系',
						'藥學系',
						'保健營養生技學系',
						'保健營養學系',
						'食品營養與保健生技學系',
						'食品營養學系',
						'營養科學系',
						'營養學系',
						'藥用植物與保健學系',
						'呼吸治療學系',
						'高齡健康管理學系',
						'健康管理學系',
						'時尚美容藝術與保健管理學士學位學程',
						'長期照護學系',
						'化粧品科學系',
						'香粧品學系',
						'藥用化妝品學系',
						'環境與安全衛生工程學系',
						'職業安全與衛生學系',
						'職業安全衛生學系',
						'運動保健學系',
						'運動健康科學系',
						'運動醫學系'];
						sectors[4]=['材質創作與設計系',
						'美術產業學系',
						'造形藝術學系',
						'創意產品設計學系',
						'視覺設計學系',
						'視覺與媒體藝術學系',
						'視覺藝術學系',
						'劇場設計學系',
						'雕塑學系',
						'藝術創意產業學系',
						'藝術與設計學系',
						'藝術與造形設計學系',
						'藝術與創意設計學系',
						'美術與文創學系',
						'美術學系',
						'書畫藝術學系',
						'應用美術學系',
						'民族音樂學系',
						'音樂學系',
						'音樂應用學系',
						'傳統音樂學系',
						'應用音樂學系',
						'中國戲劇學系',
						'劇場藝術學系',
						'戲劇創作與應用學系',
						'戲劇學系']
						sectors[5]=['牙體技術學系',
						'生物醫學工程學系',
						'生醫工程與環境科學系',
						'生物產業機電工程學系',
						'生物資訊學系',
						'生物機電工程學系',
						'土壤環境科學系',
						'生化科技學系',
						'農業化學系',
						'醫藥暨應用化學系',
						'生命科學系',
						'生命科學系暨基因體科學研究所',
						'生命科學院學士班',
						'生物科學系',
						'生物資源學系',
						'生物學系',
						'生物醫學系',
						'生物醫學科學學系',
						'生物醫學暨環境生物學系',
						'理學院學士班',
						'微生物免疫與生物藥學系',
						'微生物學系',
						'分子生物科技學系',
						'生物工程學系',
						'生物技術與動物科學系',
						'生物科技系',
						'生物科技學士學位學程',
						'生物科技學系',
						'生物產業科技學系',
						'生物農業科技學系',
						'自然生物科技學系',
						'醫學科學系',
						'昆蟲學系',
						'植物病理與微生物學系',
						'植物病理學系',
						'生物產業傳播暨發展學系',
						'生態人文學系',
						'生態科學與技術學系',
						'自然資源與環境學系',
						'食品科學系',
						'食品暨應用生物科技學系'];
						sectors[6]=['獸醫學系',
						'昆蟲學系',
						'植物病理與微生物學系',
						'植物病理學系',
						'生物產業傳播暨發展學系',
						'生態人文學系',
						'生態科學與技術學系',
						'自然資源與環境學系',
						'生物農業科技學系',
						'國際農企業學士學位學程',
						'農業經濟學系',
						'農藝學系',
						'生物技術與動物科學系',
						'畜產與生物科技學系',
						'動物科學技術學系',
						'動物科學系',
						'園藝暨生物技術學系',
						'園藝暨景觀學系',
						'園藝學系',
						'木質材料與設計學系',
						'森林暨自然保育學系',
						'森林暨自然資源學系',
						'森林學系',
						'森林環境暨資源學系',
						'水產養殖學系',
						'海洋生物科技暨資源學系',
						'環境生物與漁業科學學系',
						'食品科學系',
						'食品暨應用生物科技學系'];
						sectors[7]=['工程科學及海洋工程學系',
						'工程科學系',
						'工程與系統科學系',
						'能源國際學士學位學程',
						'系統工程暨造船學系',
						'系統及船舶機電工程學系',
						'科技工程與管理學系',
						'原子科學院學士班',
						'能源工程學系',
						'資源工程學系',
						'綠色能源科技學系',
						'輪機工程學系',
						'文化與自然資源學系',
						'歷史與地理學系',
						'土木與環境工程學系',
						'生物環境系統工程學系',
						'環境工程與科學學系',
						'環境工程學系',
						'環境科學與工程學系',
						'環境與安全衛生工程學系',
						'地球科學系',
						'地球科學學系',
						'地球與環境科學系',
						'地質科學系',
						'地質學系',
						'自然資源與環境學系',
						'地理學系',
						'地理環境資源學系',
						'區域與社會發展學系',
						'海洋科學系',
						'海洋環境及工程學系',
						'海洋環境資訊系',
						'大氣科學系',
						'大氣科學學系',
						'水土保持學系',
						'環境與防災設計學系'];
						sectors[8]=['多媒體動畫藝術學系',
						'動畫遊戲設計學系',
						'媒體設計科技學系',
						'媒體設計學系',
						'媒體傳達設計學系',
						'新媒體藝術學系',
						'資訊模擬與設計學系',
						'數位多媒體設計學系',
						'數位科技設計學系',
						'數位媒體設計學系',
						'空間設計學系',
						'室內設計學系',
						'建築及都市設計學系',
						'建築設計學系',
						'建築與都市計畫學系',
						'建築與景觀學系v',
						'建築學系',
						'社會與區域發展學系',
						'都市計畫與空間資訊學系',
						'都市計劃學系',
						'都市規劃與防災學系',
						'都市計畫與景觀學系',
						'景觀建築學系',
						'景觀設計學系',
						'景觀學系',
						'工業產品設計學系',
						'工業設計學系',
						'工藝設計學系',
						'木質材料與設計學系',
						'商品設計學系',
						'產品與媒體設計學系',
						'創意設計與建築學系',
						'藝術史學系',
						'商業設計學系',
						'創意商品設計學系',
						'視覺傳達設計學系',
						'服裝設計學系',
						'服飾設計與經營學系',
						'時尚設計學系',
						'紡織工程學系',
						'織品服裝學系',
						'材質創作與設計系',
						'美術產業學系',
						'造形藝術學系',
						'創意產品設計學系',
						'視覺設計學系',
						'視覺與媒體藝術學系',
						'視覺藝術學系',
						'劇場設計學系',
						'雕塑學系',
						'藝術創意產業學系',
						'藝術與設計學系',
						'藝術與造形設計學系',
						'藝術與創意設計學系'];
						sectors[9]=['心理學系',
						'未來與樂活產業學系',
						'社會心理學系',
						'健康心理學系',
						'諮商與工商心理學系',
						'諮商與臨床心理學系',
						'應用心理學系',
						'臨床心理學系',
						'人文社會學系',
						'人文社會學院學士班',
						'生死學系',
						'老人福祉與社會工作學系',
						'社會發展學系',
						'社會暨政策科學學系',
						'社會福利學系',
						'社會學系',
						'區域與社會發展學系',
						'應用社會學系',
						'客家語文暨社會科學學系',
						'公共行政學系',
						'社會工作學系',
						'社會工作與兒童少年福利學系',
						'社會政策與社會工作學系',
						'醫學社會學與社會工作學系',
						'人類學系',
						'民族語言與傳播學系',
						'民族學系',
						'生態人文學系',
						'族群關係與文化學系',
						'藝術史學系',
						'生活應用科學系',
						'兒童與家庭學系',
						'家庭研究與兒童發展學系',
						'佛教學系',
						'宗教文化與組織管理學系',
						'宗教學系',
						'心理與諮商學系',
						'心理輔導學系',
						'教育心理與輔導學系',
						'輔導與諮商學系',
						'諮商與輔導學系',
						'諮商與應用心理學系',
						'犯罪防治學系',
						'社會與安全管理學系',
						'勞工關係學系'];
						sectors[10]=['人文與資訊學系',
						'新媒體藝術學系',
						'資訊傳播工程學系',
						'資訊傳播學系',
						'運動資訊傳播學系',
						'口語傳播學系',
						'大眾傳播學系',
						'民族語言與傳播學系',
						'生物產業傳播暨發展學系',
						'傳播管理學系',
						'傳播與科技學系',
						'傳播學系',
						'傳播學院傳播學士學位學程',
						'傳播藝術學士學位學程',
						'運動資訊與傳播學系',
						'圖文傳播暨數位出版學系',
						'圖文傳播學系',
						'圖文傳播藝術學系',
						'電影創作學系',
						'電影學系',
						'廣播電視電影學系',
						'廣播電視學系',
						'影像傳播學系',
						'廣播與電視新聞學系',
						'新聞傳播學系',
						'新聞學系',
						'公共關係暨廣告學系',
						'廣告傳播學系',
						'廣告學系'];
						sectors[11]=['外交學系',
						'外國語文學系',
						'外國語言學系',
						'西洋語文學系',
						'英文學系',
						'英美語文學系',
						'英國語文學系',
						'英語學系',
						'應用外國語文學系',
						'應用外國語言學系',
						'應用外語學系',
						'應用英語學系',
						'翻譯學系',
						'西班牙語文學系',
						'法國語文學系',
						'義大利語文學系',
						'德國文化學系',
						'德國語文學系',
						'德語語文學系',
						'歐洲語文學系',
						'日本語文學系',
						'日本語言文化學系',
						'應用日文學系',
						'應用日語學系',
						'土耳其語文學系',
						'東亞語文學系',
						'阿拉伯語文學系',
						'俄國語文學系',
						'斯拉夫語文學系',
						'韓國語文學系',
						'兒童英語教育學系',
						'英語教學系'];
						sectors[12]=['資訊與圖書館學系',
						'圖書資訊學系',
						'人文社會學系',
						'人文社會學院學士班',
						'文化創意產業經營學系',
						'文化創意產業學系',
						'文化資產與創意學系',
						'文化與自然資源學系',
						'生物產業傳播暨發展學系',
						'社會與區域發展學系',
						'臺灣文化學系',
						'藝術創意產業學系',
						'中國文學系',
						'中國文學與應用學系',
						'中國文學學系',
						'中國語文學系',
						'文學系',
						'國文學系',
						'國語文學系',
						'華文文學系',
						'華語文學系',
						'語文與創作學系',
						'應用中文學系',
						'應用中國文學系',
						'史學系',
						'未來與樂活產業學系',
						'歷史學系',
						'藝術史學系',
						'生死學系',
						'哲學系',
						'台灣文學系',
						'臺灣語文學系',
						'應用歷史學系',
						'歷史與地理學系',
						'華語文教學學系',
						'語文教育學系',
						'應用華語文學系',
						'佛教學系',
						'宗教文化與組織管理學系',
						'宗教學系'];
						sectors[13]=['人文社會學系',
						'人文社會學院學士班',
						'文化創意產業經營學系',
						'文化創意產業學系',
						'文化資產與創意學系',
						'文化與自然資源學系',
						'生物產業傳播暨發展學系',
						'社會與區域發展學系',
						'臺灣文化學系',
						'藝術創意產業學系',
						'文創產業國際人才學士學位學程',
						'公共行政暨政策學系',
						'公共行政與政策學系',
						'公共行政學系',
						'公共事務管理學系',
						'公共事務與公民教育學系',
						'公共事務學系',
						'公共與文化事務學系',
						'行政管理暨政策學系',
						'行政管理學系',
						'社會暨公共事務學系',
						'農業經濟學系',
						'人文與資訊學系',
						'資訊科技與管理學系',
						'資訊管理學系',
						'資訊應用學系',
						'多媒體與行動商務學系',
						'資訊經營學系',
						'工業工程與工程管理學系',
						'工業工程與系統管理學系',
						'工業工程與經營資訊學系',
						'工業工程與管理學系',
						'工業管理與經營資訊學系',
						'工業管理學系',
						'工業與系統工程學系',
						'工業與資訊管理學系',
						'工學院學士班',
						'科技工程與管理學系',
						'科技管理學位學程',
						'科技管理學系',
						'科技管理學院學士班',
						'管理科學系',
						'管理科學學系',
						'營建管理學系',
						'健康產業管理學系',
						'視光學系',
						'醫務管理暨醫療資訊學系',
						'醫務管理學系',
						'醫療資訊與管理學系',
						'勞工關係學系',
						'人力資源暨公共關係學系',
						'工商管理學系',
						'生物事業管理學系',
						'企業管理系',
						'企業管理學系',
						'亞太工商管理學系',
						'傳播管理學系',
						'經營管理學系',
						'經營與管理學系',
						'應用經濟與管理學系',
						'寰宇管理學士學位學程',
						'全球商務學士學位學程',
						'管理學院管理科學與財金國際學士學位學程',
						'行銷管理學系',
						'行銷學系',
						'事業經營學系',
						'交通管理科學系',
						'物流與航運管理學系',
						'空運管理學系',
						'航運管理學系',
						'商船學系',
						'運輸科技與物流管理學系',
						'運輸科技與管理學系',
						'運輸科學系',
						'運輸管理學系',
						'土地資源學系',
						'土地管理與開發學系',
						'土地管理學系',
						'不動產與城鄉環境學系',
						'休閒遊憩規劃與管理學系',
						'旅遊管理學系',
						'觀光事業學系',
						'觀光暨休閒遊憩學系',
						'觀光管理學系',
						'觀光與會展學系',
						'觀光數位知識學系',
						'文化觀光產業學系',
						'休閒運動管理學系',
						'休閒運動學系',
						'身心整合與運動休閒產業學系',
						'運動事業管理學系',
						'運動健康與休閒學系',
						'運動資訊傳播學系',
						'運動管理學系',
						'運動與休閒學系',
						'體育推廣學系',
						'運動競技學系',
						'生活應用科學系',
						'餐旅管理學系',
						'餐飲管理學系',
						'觀光與餐飲旅館學系',
						'休閒事業管理學系',
						'休閒產業經營學系',
						'休閒產業管理學系',
						'休閒遊憩事業學系',
						'休閒與遊憩管理學系',
						'景觀與遊憩學士學位學程',
						'歐洲文化與旅遊學士學位學程'];
						sectors[14]=['工業科技教育學系',
						'工業教育學系',
						'科技應用與人力資源發展學系',
						'華語文教學學系',
						'華語文學系',
						'語文教育學系',
						'語文與創作學系',
						'應用華語文學系',
						'兒童英語教育學系',
						'英語教學系',
						'心理與諮商學系',
						'心理輔導學系',
						'生死學系',
						'教育心理與輔導學系',
						'輔導與諮商學系',
						'諮商與輔導學系',
						'諮商與應用心理學系',
						'教育科技學系',
						'數位媒體與文教產業學系',
						'數位學習科技學系',
						'數位學習設計與管理學系',
						'國際文教與比較教育學系',
						'教育行政與管理學系',
						'教育政策與行政學系',
						'教育經營與管理學系',
						'教育學系',
						'特殊教育學系',
						'幼兒教育學系',
						'幼兒與家庭教育學系',
						'成人及繼續教育學系',
						'公共事務與公民教育學系',
						'區域與社會發展學系',
						'數學教育學系',
						'數學暨資訊教育學系'];
						sectors[15]=['法律學系',
						'政治法律學系',
						'法律學士學位學程',
						'財金法律學系',
						'財經法律學系',
						'公共行政暨政策學系',
						'公共行政與政策學系',
						'外交學系',
						'政治經濟學系',
						'政治學系',
						'國際暨大陸事務學系',
						'公共行政學系',
						'公共事務管理學系',
						'公共事務與公民教育學系',
						'公共事務學系',
						'公共與文化事務學系',
						'行政管理暨政策學系',
						'行政管理學系',
						'社會暨公共事務學系',
						'農業經濟學系',
						'犯罪防治學系',
						'社會與安全管理學系',
						'土地資源學系',
						'土地管理與開發學系',
						'土地管理學系',
						'不動產與城鄉環境學系'];
						sectors[16]=['水上運動學系',
						'技擊運動技術學系',
						'技擊運動學系',
						'球類運動技術學系',
						'球類運動學系',
						'陸上運動技術學系',
						'陸上運動學系',
						'運動競技學系',
						'適應體育學系',
						'競技運動學系',
						'體育推廣學系',
						'體育與健康休閒學系',
						'體育與運動科學系',
						'體育學系',
						'舞蹈學系',
						'休閒遊憩規劃與管理學系',
						'旅遊管理學系',
						'觀光事業學系',
						'觀光暨休閒遊憩學系',
						'觀光管理學系',
						'觀光數位知識學系',
						'休閒運動管理學系',
						'休閒運動學系',
						'身心整合與運動休閒產業學系',
						'運動事業管理學系',
						'運動健康與休閒學系',
						'運動資訊傳播學系',
						'運動管理學系',
						'運動與休閒學系',
						'生活應用科學系',
						'餐旅管理學系',
						'餐飲管理學系',
						'觀光與餐飲旅館學系',
						'休閒事業管理學系',
						'休閒產業經營學系',
						'休閒產業管理學系',
						'休閒遊憩事業學系',
						'休閒與遊憩管理學系',
						'景觀與遊憩學士學位學程',
						'運動保健學系',
						'運動健康科學系',
						'運動醫學系'];
						sectors[17]=['財務工程與精算數學系',
						'統計資訊學系',
						'統計學系',
						'財務工程與精算學士學位學程',
						'會計系',
						'會計資訊學系',
						'會計暨稅務學系',
						'會計與資訊科技學系',
						'會計與資訊學系',
						'會計學系',
						'金融管理學系',
						'金融與合作經營學系',
						'金融與國際企業學系',
						'金融學系',
						'計量財務金融學系',
						'財務金融學系',
						'財務管理學系',
						'國際企業經營學系',
						'國際企業管理學系',
						'國際企業學系',
						'國際商務學系',
						'國際貿易學系',
						'國際經營與貿易學系',
						'國際農企業學士學位學程',
						'財政稅務學系',
						'財政學系',
						'財稅學系',
						'保險學系',
						'風險管理與保險學系',
						'政治經濟學系',
						'產業經濟學系',
						'經濟學系',
						'農業經濟學系',
						'應用經濟與管理學系',
						'應用經濟學系'];
						function changeCollege(index){
							var Sinner="";
							for(var i=0;i<sectors[index].length;i++){
								Sinner=Sinner+'<option value=i>'+sectors[index][i]+'</option>';
							}
							var sectorSelect=document.getElementById("sector-list");
							sectorSelect.innerHTML=Sinner;
						}
						changeCollege(document.getElementById("college-list").selectedIndex);
						</script> -->
						<div class="form-group">
							<div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger"></span> </div>
						</div>
						<div style="border: dotted;"></div>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-10" style="float: left; margin-top:20px;">
								<input name="Submit" type="submit" value="送出修改" class="btn btn-primary">
							</div>
							<div class="col-xs-offset-3 col-xs-10" style="float: left; margin-left:60px; margin-top:20px;">
								<input type="reset" value="清除修改" class="btn btn-secondary">
							</div>
						</div>
					</html>
