<html>
<head>
<title>Apotek Helude-tik</title>
</head>
<body onLoad="window.print()">
<h3 align="center">Laporan data Obat di Apotek Helude-tik</h3><hr><br>
<table border="1" width="90%">
	<tr>
		<th width="3%">Id</th>
		<th width="25%">Nama</th>
		<th width="25%">Jenis</th>
		<th width="25%">Supplier</th>
		<th width="25%">Modal</th>
		<th width="25%">Harga</th>
		<th width="25%">Jumlah</th>
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
</table>
</body>