<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "dbmhs";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
?>