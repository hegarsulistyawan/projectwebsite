<?php
 include 'config.php';

$response = array();
$result = mysql_query("SELECT * FROM barang") or die(mysql_error());

$response["barang"] = array();
while ($row = mysql_fetch_array($result)) {
    $pl = array();
    $pl["id"] = $row["id"];
    $pl["nama"] = $row["nama"];
    $pl["jenis"] = $row["jenis"];
    $pl["suplier"] = $row["suplier"];
    array_push($response["barang"], $pl);
}
echo json_encode($response);

?>