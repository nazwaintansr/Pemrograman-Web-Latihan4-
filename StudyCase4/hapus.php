<?php include 'mysqli.php';

$id = $_GET ['id'];
$query = "DELETE FROM laporanpenjualan where id = $id";
$result = $mysqli->query($query);
header("Location: index.php");

?>