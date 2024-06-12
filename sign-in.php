<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Sign In | Admin </title>
    <!-- Favicon-->
    <link rel="icon" href="pg.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>



<?php

   include("config.php");
   session_start();

   if(isset($_SESSION['email'])) {
      header("Location: db.php");
   }

//................................................................................

 // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

//..................................................................................................


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
    $user_id=$_POST['email'];
    $myusername = mysqli_real_escape_string($db,$_POST['email']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    $mypassword_md5= md5($mypassword);
    $sql = "SELECT * FROM usr_tbl WHERE email = '$myusername' and pwd = '$mypassword_md5' and status = '1'";
    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
//	   $_SESSION["test"] = "TEST";
        // run log

//$result_log_1 = mysqli_fetch_array($result_log,MYSQLI_ASSOC);
//$start_log = "insert into link3_db.support_log (user_id, pwd, ip) values ('$myusername', '$mypassword','$ip')";
//$start_log_result = mysqli_query($start_log, $local_string) or die(mysql_error());


      if($count == 1) {
//         session_register("email");
        //  $start_log = "insert into support_log (department, user_id, user_name, pwd, ip, status) values ('$department','$myusername','$name', 'ok','$ip','login')";
        //  $result_log = mysqli_query($db,$start_log);

        //  $_SESSION['user_id'] = $user_id;
         $name = $row['name'];
         $_SESSION['name'] = $name;
         $_SESSION['email'] = $myusername;
         header("location: db.php");
      }else {
        //  $start_log = "insert into support_log (department, user_id, user_name, pwd, ip, status) values ('$department','$myusername','$name', '$mypassword','$ip','Fack')";
        //  $result_log = mysqli_query($db,$start_log);
         $error = "Your Login Name or Password is invalid";

      }


   }

?>



<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Special<b>Olympic</b></a>
            <?php
if(isset($error)){
     echo $error;

}

//$message = $this->session->userdata('message');
//if (isset($message)) {
//    echo $message;
//    $this->session->unset_userdata('message');
//}
                                                ?>         
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-xs-4">
                           
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>