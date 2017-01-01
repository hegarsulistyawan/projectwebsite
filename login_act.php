<?php 
session_start();
include 'config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
//$pas=md5($pass);
$query=mysql_query("select * from admin where uname='$uname' and pass='$pass'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:homepage.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>