<?php
header('content-type: text/json');
// header('Content-Type: text/plain; charset=utf-8');

include("../config.php");

//.......................................................................................


//......................................................................................
$name =$_POST["name"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$role = $_POST["usr_type"];
$status = $_POST["status"];

$save_query = "INSERT INTO `usr_tbl` (`name`, `email`, `pwd`, `phn`, `role`, `status`)
VALUES ( '$name', '$email', '$pwd', '$phone', '$role', '$status')";

$result = mysqli_query($db,$save_query);

mysqli_close($db);

$message='Done';
echo json_encode($message);


?>