<?php
header('content-type: text/json');
session_start();
include("../config.php");

$b_certicicate = $_POST["b_certicicate"];
$date=date("Y-m-d");
$search_result=0;

$ses_sql = mysqli_query($db, "select name FROM atl_tbl where b_certicicate='$b_certicicate'and status='1'");
$get_result = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

//printf($get_result);
$name=$get_result['name'];

if($name!=null || $name!=''){
  $search_result=1;
}


echo json_encode($search_result);
?>
