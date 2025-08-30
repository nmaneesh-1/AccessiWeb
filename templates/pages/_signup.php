<?php 
include '../accessiweb/config/database.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
  $username=trim($_POST['name']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);
  $error=[];

  // validate username
 if(empty($username)){
  $error[]="Name is required";
 }elseif(!preg_match("/^[A-Za-z\s'-]{3,30}$/",$username)){
  $error[]="Enter a Name with 3-30 characters and space";
 }else{
 $username=$_POST['name'];
 }
//  validate email
if(empty($email)){
  $error[]="Email is required";
 }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $error[]="Enter a correct Email format";
 }else{
 $email=$_POST['email'];
 }
 
//  validate password
if(empty($password)){
  $error[]="Password is required";
 }elseif(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}$/",$password)){
  $error[]="Password must be at least 8 characters with one uppercase, one lowercase, and one number";
 }else{
 $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
 }
  
}else{
  print "All fields are valid";
}
?>