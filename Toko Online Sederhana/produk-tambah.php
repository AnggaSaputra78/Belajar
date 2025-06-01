<?php
include "koneksi.php";
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn, "INSERT INTO produk (nama, harga, kategori, gambar, deskripsi)
VALUES ('$nama', '$harga', '$kategori', '$gambar', '$deskripsi')");

header("Location: index.html");
?>
