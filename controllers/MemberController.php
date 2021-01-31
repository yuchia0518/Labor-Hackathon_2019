<?php
  include("../models/MemberModel.php");

  if(isset($_POST['action'])){
    switch ($_POST['action']) {
      case '1' :
        echo '';
        break;
      case 'login' :
        login();
        break;
      case 'signup' :
        $result = addMember();
        break;
      case 'logout' :
        logout();
        echo "<script language=\"JavaScript\">alert(\"登出成功\");</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
        $conn = null;
        break;
      case 'forgetaccount' :
        forgetAccount();
        break;
      case 'forgetpassword' :
        forgetPwd();
        break;
      case 'change' :
        changeMemData();
        break;
    }
  }elseif($_SESSION['acc'] == null){
    header('Location: ../index.php');
    exit;
  }

  //新增帳號
  function addMember(){
    //接收傳值
    $acc = $_POST['emailid'];
    $pwd = $_POST['password'];
    $pwd2 = $_POST['cpassword'];
    $name = $_POST['mem_name'];
    $id = $_POST['idcard'];

    $y = $_POST['yyyy'];
    $m = $_POST['mm'];
    $d = $_POST['dd'];
    $birth = $y.$m.$d;

    if($_POST["gender"] == "Male"){
      $gender = '男';
    }else{
      $gender = '女';
    }

    $email = $_POST['email'];
    $phone = $_POST['contactnum'];
    $college = $_POST['college-list'];
    $sector = $_POST['sector-list'];

    $salary = $_POST['salary'];
    switch($salary){
      case '1':$salary = '20000~25000元';break;
      case '2':$salary = '25001~30000元';break;
      case '3':$salary = '30001~35000元';break;
      case '4':$salary = '35001~40000元';break;
      case '5':$salary = '40001~45000元';break;
      case '6':$salary = '45001~50000元';break;
      case '7':$salary = '50001~55000元';break;
      case '8':$salary = '55001~60000元';break;
      case '9':$salary = '60000以上';break;
    }

    //check
    //global $cpwd;
    //global $cphone;
    //global $cemail;
    $check1='';
    $check2='';
    $check3='';
    $check4='';
    $check5='';
    $check6='';
    $check7='';
    $check8='';
    $check9='';
    $check10='';
    $check11='';
    $check12='';
    $check13='';
    $check21='';

    //判斷是否輸入正確
    if(createMember($name,$acc,$pwd,$pwd2,$sector,$birth,$phone,$gender,$salary,$email,$id) == true){
      echo "<script language=\"JavaScript\">alert(\"註冊成功\");</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=../view/index1.php>';
    }elseif(createMember($name,$acc,$pwd,$pwd2,$sector,$birth,$phone,$gender,$salary,$email,$id) == false){
      if(checkName($name) == false){
        $check1 = '姓名有誤\n';
      }
      if(checkAccount($acc) == 2){
        $check2 = '帳號重複\n';
      }elseif(checkAccount($acc) == 3){
        $check21 = '帳號請輸入6~16個字元\n';
      }
      if(checkPwd($pwd,$pwd2) == 2){
        $check3 = '密碼請輸入6~16個字元\n';
      }elseif(checkPwd($pwd,$pwd2) == 3){
        $check4 = '密碼有誤\n';
      }

      if(checkPhone($phone) == 3){
        $check5 = '手機號碼中含空格\n';
      }elseif(checkPhone($phone) == 4){
        $check6 = '手機號碼格式有誤，僅限台灣手機門號\n';
      }

      if(checkEmail($email) == 3){
        $check7 = 'E-mail中含空格\n';
      }elseif(checkEmail($email) == 4){
        $check8 = 'E-mail欄位格式有誤，請重新填寫\n';
      }

      switch(checkID($id)){
        case '2':$check9 = '身分證字元數錯誤\n';;break;
        case '3':$check10 = '身分證字號英文字母錯誤\n';;break;
        case '4':$check11 = '身分證字號輸入錯誤\n';;break;
        case '5':$check12 = '身分證字號驗證失敗\n';;break;
        case '6':$check13 = '身分證字號重複\n';;break;
      }

      //印出錯誤訊息
      $msg =$check1.$check2.$check21.$check3.$check4.$check5.$check6.$check7.$check8.$check9.$check10.$check11.$check12.$check13;
      echo "<script language=\"JavaScript\">alert(\"$msg\");history.go(-1);</script>";

    }
  }

  //忘記帳號
  function forgetAccount(){
    //接收傳值
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //判斷
    if(replyAccount($id,$email,$phone) == true){
      echo "<script language=\"JavaScript\">alert(\"輸入正確，請至信箱收取信件\");</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
    }elseif(replyAccount($id,$email,$phone) == false){
      echo "<script language=\"JavaScript\">alert(\"輸入錯誤\");history.go(-1);</script>";
    }
  }

  function forgetPwd(){

    $id = $_POST['id'];
    $acc = $_POST['account'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(replyPwd($id,$acc,$email,$phone) == true){
      echo "<script language=\"JavaScript\">alert(\"輸入正確，請至信箱收取信件\");</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
    }elseif(replyPwd($id,$acc,$email,$phone) == true){
      echo "<script language=\"JavaScript\">alert(\"輸入錯誤\");history.go(-1);</script>";
    }
  }

  function changeMemData(){
    //接收傳值
    $oldpwd = $_POST['oldpassword'];
    $pwd = $_POST['newpassword'];
    $pwd2 = $_POST['cnewpassword'];

    if(updateMemData($oldpwd,$pwd,$pwd2) == true){
      logout();
      echo "<script language=\"JavaScript\">alert(\"更改密碼成功，請重新登入\");</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
    }elseif(updateMemData($oldpwd,$pwd,$pwd2) == false){
      echo "<script language=\"JavaScript\">alert(\"更改密碼失敗\");history.go(-1);</script>";
    }

  }

  function login(){

    //接收登入頁傳來的值
    $acc = $_POST['username'];
    $pwd = $_POST['pass'];

    if(loginData($acc,$pwd) == 1)
    {
    echo "<script language=\"JavaScript\">alert(\"帳號密碼正確\");</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=../view/index1.php>';
    }elseif(loginData($acc,$pwd) == 2)
    {
      echo "<script language=\"JavaScript\">alert(\"帳號密碼有誤\");history.go(-1);</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
    }elseif(loginData($acc,$pwd) == 3)
    {
      echo "<script language=\"JavaScript\">alert(\"帳號不存在\");history.go(-1);</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
    }

  }





?>
