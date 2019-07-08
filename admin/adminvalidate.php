<?php
session_start();
$con=mysqli_connect("localhost","root","","classmates")or
die("connection not established");

$user=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($con,"SELECT * FROM admin WHERE username='$user' AND password='$password'");

//$result=mysqli_query( $con, $sql);
$rows = mysqli_num_rows($sql);

if($sql && $rows > 0){

$row = mysqli_fetch_array($result);


$_SESSION['username']=$username;
$_SESSION['password']=$password;

    
echo "<script>alert('Login Successful');</script>";
header("location:adminhome.php");

}else{
	echo "<script>alert('Login failed! Incorrect username or password');</script>";
    echo "<script>window.open('adminlogin.php','_self');</script>";
	//header("location:login.php");

}
?>