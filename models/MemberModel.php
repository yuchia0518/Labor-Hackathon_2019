<?php
  session_start();
  include("../include/DBconnect.php");

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../PHPMailer/src/Exception.php';
  require '../PHPMailer/src/PHPMailer.php';
  require '../PHPMailer/src/SMTP.php';

  function checkName($str){
    //先判斷有沒有超過10個字元
    if(mb_strlen($str)<=10){
      if(strpos($str,'·')){
        //將·去掉，看看剩下的是不是都是中文(原住民名字可能有音節符號)
        $str=str_replace("·",'',$str);
        if(preg_match('/^[\x7f-\xff]+$/', $str)){
              return true;//全是中文
            }else{
              return false;//不全是中文
            }
      }else{
            if(preg_match('/^[\x7f-\xff]+$/', $str)){
                return true;//全是中文
            }else{
                return false;//不全是中文
            }
      }
    }else{
      return false;
    }
  }

  function checkAccount($account){
    global $conn;

    //去除字串中間前後空格
    preg_replace('/\s(?=)/', '', $account);
    if(strlen($account)<=16 && strlen($account)>=6){
        $dSql = "SELECT account FROM member WHERE account = ?";

        $dselect = $conn->prepare($dSql);
        $dselect->execute(array($account));
        $dtemp = $dselect->fetchAll(PDO::FETCH_ASSOC);
        $num = count($dtemp);
        //echo "回傳結果數量:".$num."<br>";

        if($num == 0){
          //表示資料庫中沒有這個帳號存在
            return 1;
        }else{
            return 2;
        }
    }else{
      return 3;
    }
  }

  function checkPwd($pwd,$pwd2){
    if(strlen($pwd)<6 || strlen($pwd2)<6 || strlen($pwd)>16 || strlen($pwd2)>16 ){
      return 2;
    }elseif($pwd != $pwd2){
      return 3;
    }else{
      return 1;
    }
  }

  function checkMajor($major){
    //去除空格
    preg_replace('/\s(?=)/', '', $major);
    if($major = " "){
      return false;
    }
    else{
      return true;
    }
  }

  function checkBirth($birth){
    if($birth != ""){
        //去除空格
        preg_replace('/\s(?=)/', '', $birth);
        //判斷生日是不是由數字組成
        if(preg_match("/^\d*$/",$birth)){
          return true;
        }
        else{
          return false;
        }
    }else{
      return false;
    }
  }

  function checkPhone($mPhone) {
  //$msg = "";
  $twpattern = "/^(09)\d{8}$/";//台灣

    if ($mPhone == "" ){
    //$msg = $msg."手機號碼尚未填入!!\n";
      return 2;
    }
    elseif (preg_match("/ /i", $mPhone)) {
    //$msg = $msg."手機號碼中含空格!\n";
      return 3;
    }
    elseif (preg_match($twpattern,$mPhone)==false) {
    //$msg = $msg."手機號碼格式有誤，僅限台灣手機門號\n";
      return 4;
    }else{
      return 1;
    }
  }

  function checkEmail($mEmail) {
  //$msg = "";

    if ($mEmail == ""){
    //$msg = $msg."E-mail尚未填入!\n";
      return 2;
    }
    elseif (preg_match("/ /i", $mEmail)) {
    //$msg = $msg."E-mail中含空格!\n";
      return 3;
    }
    elseif (!filter_var($mEmail, FILTER_VALIDATE_EMAIL)) {
    //$msg = $msg."E-mail欄位格式有誤，請重新填寫!\n";
      return 4;
    }else{
      return 1;
    }
  }

  //檢查身分證字號
  function checkID($mID) {
    $err ='1';

    //先將字母數字存成陣列
    $alphabet =['A'=>'10','B'=>'11','C'=>'12','D'=>'13','E'=>'14','F'=>'15','G'=>'16','H'=>'17','I'=>'34',
        'J'=>'18','K'=>'19','L'=>'20','M'=>'21','N'=>'22','O'=>'35','P'=>'23','Q'=>'24','R'=>'25',
        'S'=>'26','T'=>'27','U'=>'28','V'=>'29','W'=>'32','X'=>'30','Y'=>'31','Z'=>'33'];

        //檢查字元長度
        if(strlen($mID) !=10){
          $err = '2';
          return 2;
        }//長度不對

    //驗證英文字母正確性
    $alpha = substr($mID,0,1);//英文字母
    $alpha = strtoupper($alpha);//若輸入英文字母為小寫則轉大寫
    if(!preg_match("/[A-Za-z]/",$alpha)){
      $err = '3';
      return 3;
    }
    else{
        //計算字母總和
        $nx = $alphabet[$alpha];
        $ns = $nx[0]+$nx[1]*9;//十位數+個位數x9
      }

    //驗證男女性別
    $gender = substr($mID,1,1);//取性別位置
    if($gender !='1' && $gender !='2'){
      $err = '4';
      return 4;
    }//驗證性別

    //N2x8+N3x7+N4x6+N5x5+N6x4+N7x3+N8x2+N9+N10
    if($err ==''){
      $i = 8;
      $j = 1;
      $ms =0;
      //先算 N2x8 + N3x7 + N4x6 + N5x5 + N6x4 + N7x3 + N8x2
      while($i >= 2){
        $mx = substr($mID,$j,1);//由第j筆每次取一個數字
        $my = $mx * $i;//N*$i
        $ms = $ms + $my;//ms為加總
        $j+=1;
        $i--;
      }
      //最後再加上 N9 及 N10
      $ms = $ms + substr($mID,8,1) + substr($mID,9,1);
      //最後驗證除10
      $total = $ns + $ms;//上方的英文數字總和 + N2~N10總和
      if( ($total%10) !=0){
        return 5;
        $err = '5';}
    }

    //檢查是否重複
    global $conn;
    $mSql = "SELECT ID
             from member
             where ID = ?";

    $mselect = $conn->prepare($mSql);
    $mselect->execute(array($mID));
    $mtemp = $mselect->fetchAll(PDO::FETCH_ASSOC);
    if ($mtemp !=null) {
      return 6;
      $err = '6';
    }



    //echo '身份字號：'.$mID.'<br />';
    //echo $msg;
    return 1;


  }

  //建立帳號
  function createMember($name,$acc,$pwd,$pwd2,$sector,$birth,$phone,$gender,$salary,$email,$id){
    global $conn;

    $sql1 = "SELECT * FROM member";
    $sth1 = $conn->prepare($sql1);
    $sth1->execute();
    $row = $sth1->rowCount();
    $row1 = $row+1;

    if(checkName($name) == true && checkAccount($acc) == 1 && checkPwd($pwd,$pwd2) == 1 && checkPhone($phone) ==1 && checkEmail($email) == 1 && checkID($id) == 1){
      //插入資料
      $sql = "INSERT into member (member_ID, name, account, pwd, department_name, birth, phone, gender, salary, email, ID, status)
      Values ('$row1','$name','$acc', '$pwd', '$sector', '$birth', '$phone','$gender','$salary','$email','$id','0')";
      $sth = $conn->prepare($sql);
      $sth->execute(array($sql));

      $_SESSION['acc'] = $acc;
      $_SESSION['pwd'] = $pwd;

      return true;
    }
    else{
      return false;
    }

    }

  //更新資料
  function updateMemData($oldpwd,$pwd,$pwd2){
    global $conn;

    //檢查
    if($_SESSION['pwd'] == $oldpwd){
      if(checkPwd($pwd,$pwd2) == true){
      //更新
        $sql = "UPDATE member SET pwd = '$pwd' WHERE account = ?";
        $sth = $conn->prepare($sql);
        $sth->execute(array($_SESSION['acc']));
        return true;
      }
      else{
        return false;
      }
    }else{
      return false;
    }
  }


  function replyAccount($id,$email,$phone){
    global $conn;

    $sql = "SELECT * FROM member WHERE ID = ?";
    $sth = $conn->prepare($sql);
    $sth->execute(array($id));
    $row = $sth->fetchALL(PDO::FETCH_ASSOC);
    $count = count($row);

    //看有無帳號
    if($count != 0){

      if($row[0]['ID'] == $id && $row[0]['email'] == $email && $row[0]['phone'] == $phone){
      //抓帳號
      $acc = $row[0]['account'];

      //改狀態
      $sql1 = "UPDATE member SET status = 'FA' WHERE ID = ?";
      $sth1 = $conn->prepare($sql1);
      $sth1->execute(array($id));

      $mail = new PHPMailer();                              // Passing `true` enables exceptions

      //Server settings
      //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->IsSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '107findsjob@gmail.com';                 // SMTP username
      $mail->Password = 'findsjob107';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to
      $mail->CharSet = "utf-8";                       //郵件編碼
      $mail->From = "107findsjob@gmail.com";        //寄件者信箱
      $mail->FromName = "就業通";                  //寄件者姓名
      $mail->addAddress($email);


      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = '就業通忘記帳號';
      $mail->Body    = '您的帳號為:'.$acc;

      if(!$mail->Send()){
        //echo "Error: " . $mail->ErrorInfo;
      }else{
        //echo "<b>感謝您的留言，您的建議是我們前進的動力!</b>";
      }

        return true;
      }else{
        return false;
      }
    }else
      return false;
  }

  function replyPwd($id,$acc,$email,$phone){
    global $conn;

    $sql = "SELECT * FROM member WHERE ID = ? ";
    $sth = $conn->prepare($sql);
    $sth->execute(array($id));
    $row = $sth->fetchALL(PDO::FETCH_ASSOC);
    $count = count($row);

    //檢查是否有該帳號
    if($count != 0){
      if($row[0]['ID'] == $id && $row[0]['account'] == $acc && $row[0]['email'] == $email && $row[0]['phone'] == $phone){

      //抓帳號
      $pwd = $row[0]['pwd'];

      //設定新亂數密碼
      $newpwd = substr(md5(rand()),0,6);
      $sql2 = "UPDATE member SET pwd = '$newpwd' WHERE ID = ?";
      $sth = $conn->prepare($sql2);
      $sth->execute(array($id));

      //改狀態
      $sql1 = "UPDATE member SET status = 'FP' WHERE ID = ?";
      $sth1 = $conn->prepare($sql1);
      $sth1->execute(array($id));

      $mail = new PHPMailer();                              // Passing `true` enables exceptions

      //Server settings
      //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->IsSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '107findsjob@gmail.com';                 // SMTP username
      $mail->Password = 'findsjob107';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to
      $mail->CharSet = "utf-8";                       //郵件編碼
      $mail->From = "107findsjob@gmail.com";        //寄件者信箱
      $mail->FromName = "就業通";                  //寄件者姓名
      $mail->addAddress($email);

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = '就業通忘記密碼';
      $mail->Body    = '您的新密碼為:'.$newpwd.'，請盡速更改密碼';

      if(!$mail->Send()){
        //echo "Error: " . $mail->ErrorInfo;
      }else{
        //echo "<b>感謝您的留言，您的建議是我們前進的動力!</b>";
      }

      return true;
      }else{
      return false;
      }
    }else
      return false;
  }

  function loginData($acc,$pwd){
    global $conn;
    //搜尋資料庫資料
    $sql = "SELECT * FROM member WHERE account = ?";
    $sth = $conn->prepare($sql);
    $sth->execute(array($acc));
    $row = $sth->fetchALL(PDO::FETCH_ASSOC);
    $count = count($row);

    //看帳密是否空值及帳密正確
    if($count != 0){
    if($row[0]['account'] == $acc && $row[0]['pwd'] == $pwd)
    {
    //存入SESSION
    $_SESSION['acc'] = $acc;
    $_SESSION['pwd'] = $pwd;

    return 1;
    }elseif($row[0]['account'] != $acc || $row[0]['pwd'] != $pwd){
    return 2;
    }
    }else{
      return 3;
    }
  }

  function logout(){
    unset($_SESSION['acc']);
    unset($_SESSION['pwd']);
    session_destroy();
  }
?>
