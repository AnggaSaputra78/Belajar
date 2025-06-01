<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "UPDATE produk SET
  nama='$nama', harga='$harga', kategori='$kategori',
  gambar='$gambar', deskripsi='$deskripsi' WHERE id=$id");

echo "Berhasil update";
?>
