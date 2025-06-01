<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "toko_online");

// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk membersihkan input
function bersihkanInput($data) {
  return htmlspecialchars(trim($data));
}

// Ambil dan bersihkan data dari form
$nama = bersihkanInput($_POST['nama']);
$harga = bersihkanInput($_POST['harga']);
$deskripsi = bersihkanInput($_POST['deskripsi']);
$kategori = bersihkanInput($_POST['kategori']);
$gambar = bersihkanInput($_POST['gambar']);

// Daftar kategori yang diizinkan (bisa kamu sesuaikan)
$kategori_izin = ['Elektronik', 'Pakaian', 'Makanan', 'Minuman', 'Lainnya'];

// Validasi
$errors = [];

if (empty($nama)) {
  $errors[] = "Nama produk wajib diisi.";
}

if (empty($harga)) {
  $errors[] = "Harga produk wajib diisi.";
} elseif (!is_numeric($harga)) {
  $errors[] = "Harga harus berupa angka.";
}

if (empty($deskripsi)) {
  $errors[] = "Deskripsi produk wajib diisi.";
} elseif (strlen($deskripsi) > 500) {
  $errors[] = "Deskripsi tidak boleh lebih dari 500 karakter.";
}

if (!in_array($kategori, $kategori_izin)) {
  $errors[] = "Kategori tidak valid.";
}

if (empty($gambar)) {
  $errors[] = "URL gambar wajib diisi.";
}

// Tampilkan error jika ada
if (!empty($errors)) {
  foreach ($errors as $err) {
    echo "<p style='color:red;'>$err</p>";
  }
} else {
  // Query siap eksekusi
  $sql = "INSERT INTO produk (nama, harga, deskripsi, gambar, kategori)
          VALUES ('$nama', '$harga', '$deskripsi', '$gambar', '$kategori')";

  if ($conn->query($sql) === TRUE) {
    echo "<p style='color:green;'>Produk berhasil ditambahkan!</p>";
  } else {
    echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
  }
}

$conn->close();
?>
