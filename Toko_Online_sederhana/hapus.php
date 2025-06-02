<?php
include 'db.php';

$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

if ($hapus) {
  header("Location: index.php");
  exit;
} else {
  echo "Gagal menghapus data.";
}
?>
