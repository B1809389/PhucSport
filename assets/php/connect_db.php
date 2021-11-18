<?php 
$host="localhost";
$user="root";
$password="";
$database="phucsport";
$con=mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_error()){
    echo "Connect Fail: ".mysqli_connect_errno(); exit;
}
// else{
//     echo "success";
// }

