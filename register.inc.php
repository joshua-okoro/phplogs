<?php
if(isset($_POST["register"])){
$name=$_POST["name"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
include_once("dbhconnect.php");



$sql="select * from `data2` where username='$username'";
$result=mysqli_query($conn,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
       $name2; 
       header("location:register.php");
       exit();
          
    }
        
        else{
 $sql="insert into `data2` (name,username,email,password) values ('$name','$username','$email','$password')";
       $result=mysqli_query($conn,$sql);
       if($result){
        header("location:home.php");
       }
        
        }
}
}