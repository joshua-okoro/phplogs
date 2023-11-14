<?php
$hostname="localhost";
$dbusername= "root";
$password="";
$dbname = "new dbh";
$conn=mysqli_connect($hostname,$dbusername,$password,$dbname);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}else{
    echo"connection successful";
}