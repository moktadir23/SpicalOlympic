<?php
header('content-type: text/json');
// header('Content-Type: text/plain; charset=utf-8');

include("../config.php");

//.......................................................................................


//......................................................................................
$name =$_POST["name"];
$sp_name = $_POST["sp_name"];
$nid = $_POST["nid"];
$age = $_POST["age"];

 $grnder= '2';
$org = $_POST["org"];
$prfsn = $_POST["prfsn"];
$sn_dtr = $_POST["sn_dtr"];

$house = $_POST["house"];
$p_station = $_POST["p_station"];
$p_ofc = $_POST["p_ofc"];
$p_code = $_POST["p_code"];
$dst = $_POST["dst"];
$cell = $_POST["cell"];
$email = $_POST["email"];

$relation = $_POST["relation"];
$athlt_crtficate = $_POST["athlt_crtficate"];
$fileToUpload = $_POST["fileToUpload"];
$athlt_name = 'test name';

$save_query = "INSERT INTO `fmly_tbl` (`name`, `sp_name`, `nid`, `sn_dtr`, `gender`, `org`, `age`,  `prfsn`, `house`, `p_station`,
 `p_ofc`, `p_code`, `dst`, `cell`, `email`, `athlt_crtficate`, `relation`, `fileToUpload`, `athlt_name`)  VALUES
( '$name', '$sp_name', '$nid', '$sn_dtr', '$grnder', '$org', '$age', '$prfsn', '$house', '$p_station', '$p_ofc', '$p_code', '$dst', '$cell', '$email',
  '$athlt_crtficate','$relation','$fileToUpload','$athlt_name')";

$result = mysqli_query($db,$save_query);

mysqli_close($db);

$message='Done';
echo json_encode($message);
?>
