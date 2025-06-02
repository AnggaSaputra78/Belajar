<?php
include 'db.php';

$nama      = $_POST['nama'];
$harga     = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$kategori  = $_POST['kategori'];
$gambar    = $_POST['gambar'];

$query = "INSERT INTO produk (nama, harga, deskripsi, kategori, gambar) 
          VALUES ('$nama', '$harga', '$deskripsi', '$kategori', '$gambar')";

if (mysqli_query($conn, $query)) {
    echo "<script>
            alert('Produk berhasil ditambahkan!');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "Gagal menambahkan produk: " . mysqli_error($conn);
}
?>
