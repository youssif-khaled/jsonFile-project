<?php 
$error = [];
if( isset($_POST['submit'])){
 $txt = $_FILES['file'];
 $txtName = $txt['name'];
 if(empty($txtName))
 {
// var_dump($txt);
$error[] = "must choose";
print_r($error);
header("location:upload-json.php");
}

 $txtError = $txt['error'];
$ext = pathinfo($txtName,PATHINFO_EXTENSION);
$textTemp = $txt['tmp_name'];
$error = [];
if($txtError > 0){
  $error[] = "there is Error";
}
elseif(!in_array($ext,['json','JSON'])){
$error[] = "Must be Text";
}
// print_r($error);
move_uploaded_file($textTemp,"uploads/$txtName");
header("location:display.php");


}
else{
header("location:upload-json.php");
}


?>

