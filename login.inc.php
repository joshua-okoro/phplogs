<?php
if(isset($_POST["login"])){
  $username=$_POST["username"];  
  $password=$_POST["password"];
  include_once("dbhconnect.php");

  $sql="select * from `data2` where username='$username' and password='$password'";
  $result=mysqli_query($conn,$sql);
  if($result){
  $num=mysqli_num_rows($result);
  if($num>0){
   header("location:home.php");
  }else{
    echo"invalid account please create account";
  }
  
  }}