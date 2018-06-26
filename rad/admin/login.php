<?php

  require "../config.php";

if(!isset($_POST['username'])||!isset($_POST['password'])){
	die("invalid parameters");
}

$username=$_POST['username'];
$password=$_POST['password'];

$username= str_replace("'","",$username);
$username= str_replace("-","",$username);
$password= str_replace("'","",$password);
$password= str_replace("'","",$password);

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);

$q="SELECT * FROM users WHERE username='{$username}' and password='{$password}' limit 1";
$res= mysqli_query($conn,$q);
$user= mysqli_fetch_object($res);

if($user){
	session_start();
	$_SESSION['status']=$user->status;
	header("location:index.php");
}else{
	echo "invalid user";
}