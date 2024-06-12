<?php
header('content-type: text/json');
session_start();
include("../config.php");
//no need to continue if there is no value in the POST username
if(!isset($_POST['union']))
   exit;
$union=$_POST['union'];
$dst=$_POST['dst'];

$result= "SELECT id, upazilla_id ,name FROM unions WHERE name like '$union%' and district_id='$dst'";
$get_result = mysqli_query($db, $result) or die(mysqli_error() . 'error 1');


$array=array();
while ($row = mysqli_fetch_array($get_result)) {
   $x=$row["name"];
   array_push($array, $x);
}
 echo json_encode($array);

?>





