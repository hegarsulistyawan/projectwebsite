<!DOCTYPE html>
<html>
<head>
	<title>Apotek Helude-tik</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<?php include 'config.php'; ?>
	<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>
<body>	
<div class="container">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
		
	<div class="panel panel-default">
		<div class="col-md-4 col-md-offset-4 kotak">
			<div class="module form-module">
				<div class="toggle"><i class="fa fa-times fa-pencil"></i>
				</div>
				<div class="form">
					<h2>Login to your account</h2>
					<form name="formlogin" action="login_act.php" method="post">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="uname"/>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div><br>
					<button value="login">Login</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
</body>
</html>