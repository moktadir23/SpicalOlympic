<?php
   session_start();
   // destroy the session
   unset($_SESSION["email"]);
   unset($_SESSION["id"]);
   $_SESSION = array();
   session_unset();
   
   if(session_destroy()) {
      header("Location: sign-in.php");
   }
   
?>