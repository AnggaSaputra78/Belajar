<?php
include "koneksi.php";
$kategori = $_GET['kategori'] ?? 'semua';

$sql = "SELECT * FROM produk";
if ($kategori != 'semua') {
  $sql .= " WHERE kategori='$kategori'";
}
$res = mysqli_query($conn, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($res)) {
  $data[] = $row;
}
echo json_encode($data);
?>
