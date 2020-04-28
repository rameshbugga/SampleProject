<?php

//define("DB_HOST", "127.0.0.1:3306 ");
define("DB_HOST", "LOCALHOST:3307 ");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "dms_database");

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
//$con=mysqli_connect("localhost", "root", "", "dms_database");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

//if ($con) {
 //   echo "Connected!";
//  } else {
 //   echo "Connection Failed";
//  }
 ?>
