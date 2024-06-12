<?php
header('content-type: text/json');

// header('Content-Type: text/plain; charset=utf-8');

include("../config.php");

//.......................................................................................

/*
echo $target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["filename"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
/*
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


echo $filename=$_FILES["filename"]["name"];
$url = '';
if( move_uploaded_file($_FILES['filename']['tmp_name'],'upload/'.$filename) ){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
}

// Return image url
echo $url;

*/


// echo '<pre>';
// print_r($_FILES);
// echo '<pre>';
// $fileToUpload = $_POST["fileToUpload"];

// echo $_FILES['fileToUpload']['full_path'];
// // c:\Users\golam.moktadir\Downloads\pg.jpg
// $target_path = "e:/";  
// $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
// if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
//     echo "File uploaded successfully!";  
// } else{  
//     echo "Sorry, file not uploaded, please try again!";  
// } 







//......................................................................................
$frm_type =$_POST["frm_type"];
 $name =$_POST["name"];
$father = $_POST["father"];
$mother = $_POST["mother"];
$dob = $_POST["dob"];
$grnder= $_POST["dob"];
$date = strtotime($dob); 
$new_dob= date('Y-m-d', $date); 
$org = $_POST["org"];
$b_certicicate = $_POST["b_certicicate"];
$d_type = $_POST["d_type"];
$house = $_POST["house"];
$p_station = $_POST["p_station"];
// $p_ofc = $_POST["p_ofc"];
// $p_code = $_POST["p_code"];
$dst = $_POST["dst"];
$cell = $_POST["cell"];
$email = $_POST["email"];
$spt = $_POST["spt"];
$reg_year = $_POST["reg_year"];
$guardian = $_POST["guardian"];
$relation = $_POST["relation"];
$g_cell = $_POST["g_cell"];

$division = $_POST["division"];
$union = $_POST["union"];

$fileToUpload = $_POST["filename"];

$save_query = "INSERT INTO `atl_tbl` ( `frm_type`, `name`, `father`, `mother`, `dob`, `gender`, `org`, `b_certicicate`, `d_type`, `house`, `p_station`, `union`, `dst`,`division`, `cell`, `email`, `spt`, `reg_year`, `guardian`, `relation`, `g_cell`, `fileToUpload`) 
VALUES
( '1', '$name', '$father', '$mother', '$new_dob', '$grnder', '$org', '$b_certicicate', '$d_type', '$house', '$p_station', '$union', '$dst', '$division', '$cell', '$email', '$spt', '$reg_year', '$guardian', '$relation', '$g_cell', '$fileToUpload')";




$result = mysqli_query($db,$save_query);

mysqli_close($db);

$message='Done';
echo json_encode($message);
?>
