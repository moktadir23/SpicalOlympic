<?php
header('content-type: text/json');
// header('Content-Type: text/plain; charset=utf-8');

include("../config.php");

//.......................................................................................


//......................................................................................

$name =$_POST["name"];
$father = $_POST["father"];
$mother = $_POST["mother"];
$dob = $_POST["dob"];
$date = strtotime($dob); 
$new_dob= date('Y-m-d', $date); 

// $grnder= $_POST["grnder"];
$org = $_POST["org"];
$nid = $_POST["nid"];
$spt = $_POST["spt"];

$house = $_POST["house"];
$p_station = $_POST["p_station"];
$p_ofc = $_POST["p_ofc"];
$p_code = $_POST["p_code"];

$dst = $_POST["dst"];
$cell = $_POST["cell"];
$email = $_POST["email"];

// $fileToUpload = $_POST["fileToUpload"];

$save_query = "INSERT INTO `coach_tbl` ( `name`, `father`, `mother`, `dob`, `gender`, `org`, `nid`, `house`, `p_station`, `p_ofc`, `p_code`, `dst`, `cell`, `email`, `spt`, `fileToUpload`) 
VALUES
( '$name', '$father', '$mother', '$new_dob', '', '$org', '$nid', '$house', '$p_station', '$p_ofc', '$p_code', '$dst', '$cell', '$email', '$spt', '')";




$result = mysqli_query($db,$save_query);

mysqli_close($db);

$message='Done';
echo json_encode($message);
?>
