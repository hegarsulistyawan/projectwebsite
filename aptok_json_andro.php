<?php
include('config.php');

$response = array();
$query=mysql_query("SELECT * FROM barang ORDER BY id DESC") or die(mysql_error());

$response["barang"] = array();
while($data=mysql_fetch_assoc($query)){
    $agt = array();
    $agt["nama"] = $data["nama"];
    $agt["modal"] = $data["modal"];
    $agt["harga"] = $data["harga"];
    $agt["jumlah"] = $data["jumlah"];
    array_push($response["barang"],$agt);
}
echo json_encode($response);
?>