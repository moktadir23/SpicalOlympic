<?php

header('content-type: text/json');
include("../config.php");

if(!isset($_POST['pwd']))
   exit;
$pwd=$_POST['pwd'];

$result= "SELECT * FROM divisions ";
$get_result = mysqli_query($db, $result) or die(mysqli_error() . 'error 1');

$new_array=array();
while($get_listitem = mysqli_fetch_array($get_result))
{
$id = $get_listitem["id"];
$name = $get_listitem["name"];
$array=$name;
array_push($new_array, $array);
}

echo json_encode($new_array);

?>