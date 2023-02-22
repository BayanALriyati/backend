<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json;");
 header("Access-Control-Allow-Methods: *");
 header("Content-Type: application/json; charset=UTF-8");
 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "crud_function";

 $con= new mysqli($hostName,$userName,$password,$dbName);
 
 if($con){
    echo "connected";
 }else{
    echo "not connected";
 }

  ?>