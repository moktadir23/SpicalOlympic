<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['email'];
   
//   $ses_sql = mysqli_query($db,"select email from dashboard_user_tbl where email = '$user_check' ");
   
   $ses_sql = mysqli_query($db,"select id from usr_tbl where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   
   if(!isset($_SESSION['email'])){
      header("location:sign-in.php");
   }
?>