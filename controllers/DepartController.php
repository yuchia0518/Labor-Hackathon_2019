<?php
  include "../models/DepartModel.php";
  function getBSChart($dDiscipline_ID){
    return getBSData($dDiscipline_ID);
  }

  function getMSChart($dDiscipline_ID){
    return getMSData($dDiscipline_ID);
  }

  function getBSRecommand($dDiscipline_ID){
    return recommandBSJobPosi($dDiscipline_ID);
  }

  function getMSRecommand($dDiscipline_ID){
    return recommandMSJobPosi($dDiscipline_ID);
  }
?>
