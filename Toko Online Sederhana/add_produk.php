<?php
include "db.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];
$kategori = $_POST['kategori'];

$sql = "INSERT INTO produk (nama, harga, deskripsi, gambar, kategori) 
        VALUES ('$nama', '$harga', '$deskripsi', '$gambar', '$kategori')";
$conn->query($sql);
?>
