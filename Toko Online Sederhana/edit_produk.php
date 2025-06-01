<?php
include "db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];
$kategori = $_POST['kategori'];

$sql = "UPDATE produk SET 
        nama='$nama', 
        harga='$harga', 
        deskripsi='$deskripsi', 
        gambar='$gambar', 
        kategori='$kategori' 
        WHERE id=$id";
$conn->query($sql);
?>
