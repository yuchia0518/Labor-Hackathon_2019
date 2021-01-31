<?php
  include ("../include/DBconnect.php");

  function getBSData($dDiscipline_ID){
    global $conn;
    $dSql = "select department_name, avg_month_salary,employment_ratio, unemployment_ratio
             from year_degree_depart
             where department_ID like ?
             and degree_ID = 1
             order by department_ID";

    $dselect = $conn->prepare($dSql);
    $dselect->execute(array("$dDiscipline_ID%"));
    $dtemp = $dselect->fetchAll(PDO::FETCH_ASSOC);
    $num = count($dtemp);
//    echo "1回傳結果數量:".$num."<br>";
    $i = 0;
    foreach ($dtemp as $dtempResult){
      $dresult[$i] = array(1=>$dtempResult["department_name"],
                           2=>$dtempResult["avg_month_salary"],
                           3=>$dtempResult["employment_ratio"]*100,
                           4=>$dtempResult["unemployment_ratio"]*100);
      $i = $i+1;
    };


    return $dresult;
  }
  function getMSData($dDiscipline_ID){
    global $conn;
    $dSql_2 = "select department_name, avg_month_salary, employment_ratio, unemployment_ratio
             from year_degree_depart
             where department_ID like ?
             and degree_ID = 2
             order by department_ID";

    $dselect_2 = $conn->prepare($dSql_2);
    $dselect_2->execute(array("$dDiscipline_ID%"));
    $dtemp_2 = $dselect_2->fetchAll(PDO::FETCH_ASSOC);
    $dresult_2 = array();
    $num2 = count($dtemp_2);
//    echo "2回傳結果數量:".$num2."<br>";
    $i = 0;
    foreach ($dtemp_2 as $dtempResult_2){
      $dresult_2[$i] = array(1=>$dtempResult_2["department_name"],
                             2=>$dtempResult_2["avg_month_salary"],
                             3=>$dtempResult_2["employment_ratio"]*100,
                             4=>$dtempResult_2["unemployment_ratio"]*100);
      $i = $i+1;
    };
    return $dresult_2;
  }


  function recommandBSJobPosi($dDiscipline_ID){
    global $conn;
    $dSql = "SELECT department_ID FROM `discipline_year_depart` WHERE department_ID like ?
              and degree_ID = 1 order by department_ID";
    $dselect = $conn->prepare($dSql);
    $dselect->execute(array("$dDiscipline_ID%"));
    $dtemp = $dselect->fetchAll(PDO::FETCH_ASSOC);

    $num = count($dtemp);
  //  echo "<br>"."回傳結果數量3:".$num."<br>";
    $dresult = array();
    $i = 0;
    foreach ($dtemp as $dtempResult){
      $dresult[$i] = $dtempResult["department_ID"];
      $i = $i+1;
    }
//    echo "<br>";
    $x = 0;
    $position = array();
    for($j=0;$j<$num;$j++){

        $dSql2 = "SELECT A.position_ID, B.position_name FROM depart_reco_position A join position_category B
                  on A.position_ID = B.position_ID
                  where A.degree_ID = 1 and A.department_ID = ?
                  order by A.department_ID, A.position_ID";
        $dselect2 = $conn->prepare($dSql2);
        $dselect2->execute(array($dresult[$x]));
        $dtemp2 = $dselect2->fetchAll(PDO::FETCH_ASSOC);
        $num2 = count($dtemp2);
  //      echo $dresult[$x];

        $m = 1;
        foreach ($dtemp2 as $dtempResult_p){
          $position[$x][$m][0] =  $dtempResult_p["position_ID"];
          $position[$x][$m][1] =  $dtempResult_p["position_name"];
 //       echo $position[$x][$m]."\n".$x.$m;
          $m = $m+1;
        }
  //        echo "<br>";
          $x = $x+1;
    }
      return $position;
  }

  function recommandMSJobPosi($dDiscipline_ID){
    global $conn;
    $dSql = "SELECT department_ID FROM `discipline_year_depart` WHERE department_ID like ?
              and degree_ID = 2 order by department_ID";
    $dselect = $conn->prepare($dSql);
    $dselect->execute(array("$dDiscipline_ID%"));
    $dtemp = $dselect->fetchAll(PDO::FETCH_ASSOC);

    $num = count($dtemp);
    $dresult = array();
    $i = 0;
    foreach ($dtemp as $dtempResult){
      $dresult[$i] = $dtempResult["department_ID"];
      $i = $i+1;
    }
    $x = 0;
    $position = array();
    for($j=0;$j<$num;$j++){

        $dSql2 = "SELECT A.position_ID, B.position_name FROM depart_reco_position A join position_category B
                  on A.position_ID = B.position_ID
                  where A.degree_ID = 2 and A.department_ID = ?
                  order by A.department_ID, A.position_ID";
        $dselect2 = $conn->prepare($dSql2);
        $dselect2->execute(array($dresult[$x]));
        $dtemp2 = $dselect2->fetchAll(PDO::FETCH_ASSOC);
        $num2 = count($dtemp2);

        $m = 1;
        foreach ($dtemp2 as $dtempResult_p){
          $position[$x][$m][0] =  $dtempResult_p["position_ID"];
          $position[$x][$m][1] =  $dtempResult_p["position_name"];
          $m = $m+1;
        }
          $x = $x+1;
    }
      return $position;
  }

  //    $re = recommandBSJobPosi("14");

//    echo $re[0][1][0].$re[0][1][1];
//    echo count($re[8]);




?>
