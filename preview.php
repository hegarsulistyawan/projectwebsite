<html>
<head>
<title>Apotek Helude-tik</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body onLoad="window.print()">
<div class="container">
<h3><u> Laporan data Obat di Apotek Helude-tik</u></h3><br>
<table class="table table-inverse">
	<tr class="bg-">
		<th class="col-md-1">Id</th>
		<th class="col-md-2">Nama</th>
		<th class="col-md-2">Jenis</th>
		<th class="col-md-2">Supplier</th>
		<th class="col-md-3">Modal</th>
		<th class="col-md-2">Harga</th>
		<th class="col-md-2">Jumlah</th>
	</tr>
<?php
include "config.php";
$sql= mysql_query("select * from barang");
while($data=mysql_fetch_array($sql)){
echo"<tr>
<td>$data[id]</td>
<td>$data[nama]</td>
<td>$data[jenis]</td>
<td>$data[suplier]</td>
<td>$data[modal]</td>
<td>$data[harga]</td>
<td>$data[jumlah]</td>
</tr>";
}?>
</div>
</table>
</body>