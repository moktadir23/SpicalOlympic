<?php

//    $user = "support";
//    $pass = "fb]BIs34xqRS_m7Bjz2";
//    $server = "10.49.38.46";
//    $dbase = "sp_link3_db";
//    $port = "6446";

   $user = "root";
   $pass = "";
   $server = "localhost";
   $dbase = "sp_olympic_db";
   $port = "3306";
   ///$db_connect = mysqli_connect($server,$user,$pass,$dbase,$port);

   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try 
   {
      $db = mysqli_connect($server,$user,$pass,$dbase,$port);
    //  echo "DB connect OK"; 
   } 
   catch(Exception $e) 
   {
      echo 'Message: ' .$e->getMessage();
      echo "Connection error please contact with support team."; exit;
   }


//    @mysqli_query("SET AUTOCOMMIT=0");
//    if (mysqli_connect_errno()){
//       echo "Failed to connect to MySQLi: " . mysqli_connect_error(); exit;
//    }
   if(!@mysqli_select_db($db,$dbase)) { 
      echo "Database Select failed";  exit;
   } 
  
?>