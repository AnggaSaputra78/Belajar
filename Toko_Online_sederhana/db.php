<?php
$host = "localhost";
$user = "root";     // sesuaikan jika bukan root
$pass = "";         // sesuaikan password phpmyadmin kamu
$db   = "toko_online";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
