<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
	<title>Apotek Helude-Tik</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Apotek Helude-Tik</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="ganti_pass.php">Change Password &nbsp&nbsp<span class="glyphicon glyphicon-lock"></span></a></li>
					<li><a href="logout.php">Log Out &nbsp&nbsp<span class="glyphicon glyphicon-log-out"></a></li>
					<li><a href="#">Hy , <?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div><hr>
	</div>

	<div class="col-md-2">

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Beranda</a></li>			
			<li><a href="barang.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Obat</a></li>
		</ul>
	</div>
	<div class="col-md-10">