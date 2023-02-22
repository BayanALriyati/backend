<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json;");
  header("Access-Control-Allow-Methods: POST");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include 'config.php';
$name = isset($_REQUEST['name'])?$_REQUEST['name']:"";
$phone = isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
$address = isset($_REQUEST['address'])?$_REQUEST['address']:"";

if($name!=""  && $phone!="" && $address!=""){
  $sql ="INSERT INTO crudapi ( name , phone , address) VALUES ('$name'', '$phone', '$address);";
  $res = mysqli_query($con, $sql);
  if($res){
    echo "Success!";
  }
  else{
    echo "Error!";
  }
  $con->close();
}else{
  echo "data sent wrong";
}
  

;
?>