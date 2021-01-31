<?php

  include "../models/JobModel.php";

//取得該職業類別所有職位類別
  function getJobType($career_ID){
    return getJType($career_ID);

  }

//取得職位類別所有job
  function getSelectJob($jPosition_ID){
    return getJob($jPosition_ID);

  }
//取得職位類別推薦學門
  function getRecommandDepart($jPosition_ID){
    return recommandDepart($jPosition_ID);

  }

//取得job的細節
  function getJobDetail($jJob_ID){
    return getJDetail($jJob_ID);

    // $a =  recommandDepart($jPosition_ID);
    // print_r($a);
  }

// recommandDepart(101);

?>
