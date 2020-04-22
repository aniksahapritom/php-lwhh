<?php

add_filter("gform_pre_submission_filter_5", "combine_date");
function combine_date($Date_combine_field){

  //concatenate province fields
$combinedDate = $_POST['input_7_2'].'-'.$_POST['input_7_1'].'-'.$_POST['input_7_3'];
$_POST['input_25'] = $combinedDate;

	  return $Date_combine_field;

}


add_filter("gform_pre_submission_filter_5", "combine_date");
function combine_date($Date_combine_field){

  //concatenate province fields
$combinedDate = $_POST['input_7'];
$_POST['input_25'] = $combinedDate;

	  return $Date_combine_field;

}