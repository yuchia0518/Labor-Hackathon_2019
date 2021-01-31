<?php
  include ("../include/DBconnect.php");


  function getJob($jPosition_ID){
    global $conn;
    $jSql = "select *
             from job
             where job.position_ID = ?
             order by job.job_ID";

     // $jSql = "select job.job_ID,job.name, job.position_ID
     //         from job 107find_job
     //         where job.position_ID = `1001`
     //         order by job.job_ID";

    $jselect = $conn->prepare($jSql);
    $jselect->execute(array($jPosition_ID));
    $jtemp = $jselect->fetchAll(PDO::FETCH_ASSOC);

    $num = count($jtemp);
    // echo "回傳結果數量:".$num."<br>";
    $jresult = array();
    $i = 0;

    foreach ($jtemp as $jtempResult){
      $jresult[$i] = array(1=>$jtempResult["job_ID"],
                           2=>$jtempResult["name"],
                           3=>$jtempResult["position_name"],
                           4=>$jtempResult["quota"],
                           5=>$jtempResult["start_date"],
                           6=>$jtempResult["end_date"],
                           7=>$jtempResult["content"],
                           8=>$jtempResult["location"],
                           9=>$jtempResult["work_shift"],
                           10=>$jtempResult["experience"],
                           11=>$jtempResult["degree"],
                           12=>$jtempResult["salary_type"],
                           13=>$jtempResult["salary"],
                           14=>$jtempResult["company"],
                           15=>$jtempResult["link"],
                           16=>$jtempResult["position_ID"],

                           );
      // if ($i==0) {
      //     print_r($jresult[$i][6]);
      // };
      $i = $i+1;

    };
    // print_r($jresult)."<br>"."<br>";
    return $jresult;

  }



  function recommandDepart($jPosition_ID){
    global $conn;
    // $jSql = "select position_reco_discipline.discipline_ID
    //          from position_reco_discipline
    //          where position_reco_discipline.position_ID = ?";

    $jSql = "select discipline.discipline_ID, discipline.discipline_name
             from discipline
             JOIN position_reco_discipline
             ON discipline.discipline_ID = position_reco_discipline.discipline_ID
             where position_reco_discipline.position_ID = ? ";


// 

    $jselect = $conn->prepare($jSql);
    $jselect->execute(array($jPosition_ID));
    $jtemp = $jselect->fetchAll(PDO::FETCH_ASSOC);

    $num = count($jtemp);

    $jresult = array();
    $i = 0;

    foreach ($jtemp as $jtempResult){
      $jresult[$i] = array(1=>$jtempResult["discipline_ID"],
                           2=>$jtempResult["discipline_name"],);
      // if ($i==0) {
      //     print_r($jresult[$i][6]);
      // };
      $i = $i+1;

    };

    // print_r($jresult);
    return $jresult;
  }


  function getJDetail($jJob_ID){
    global $conn;
    $jSql = "select *
             from job
             where job.job_ID = ?";

     // $jSql = "select job.job_ID,job.name, job.position_ID
     //         from job 107find_job
     //         where job.position_ID = `1001`
     //         order by job.job_ID";

    $jselect = $conn->prepare($jSql);
    $jselect->execute(array($jJob_ID));
    $jtemp = $jselect->fetchAll(PDO::FETCH_ASSOC);

    $num = count($jtemp);
    // echo "回傳結果數量:".$num."<br>";
    $jresult = array();
    $i = 0;

    foreach ($jtemp as $jtempResult){
      $jresult[$i] = array(1=>$jtempResult["job_ID"],
                           2=>$jtempResult["name"],
                           3=>$jtempResult["position_name"],
                           4=>$jtempResult["quota"],
                           5=>$jtempResult["start_date"],
                           6=>$jtempResult["end_date"],
                           7=>$jtempResult["content"],
                           8=>$jtempResult["location"],
                           9=>$jtempResult["work_shift"],
                           10=>$jtempResult["experience"],
                           11=>$jtempResult["degree"],
                           12=>$jtempResult["salary_type"],
                           13=>$jtempResult["salary"],
                           14=>$jtempResult["company"],
                           15=>$jtempResult["link"],
                           16=>$jtempResult["position_ID"],

                           );
      // if ($i==0) {
      //     print_r($jresult[$i][6]);
      // };
      $i = $i+1;

    };
    // print_r($jresult);
    return $jresult;

  }





  function getJType($career_ID){
    global $conn;
    $jSql = "select position_category.position_ID, position_category.position_name
             from position_category
             where career_ID=?";


    $jselect = $conn->prepare($jSql);
    $jselect->execute(array($career_ID));
    $jtemp = $jselect->fetchAll(PDO::FETCH_ASSOC);

    $num = count($jtemp);
    // echo "回傳結果數量:".$num."<br>";



    $i=0;
    foreach ($jtemp as $jtempResult){
      $jresult[$i] = array(1=>$jtempResult["position_ID"],
                           2=>$jtempResult["position_name"]);


       // echo $jtempResult["position_ID"]."<br>";
      $i = $i+1;
    };
    // print_r($jresult);
    return $jresult;
  }



?>
