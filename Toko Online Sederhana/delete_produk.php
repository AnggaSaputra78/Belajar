<?php
include "db.php";
$id = $_POST['id'];
$sql = "DELETE FROM produk WHERE id=$id";
$conn->query($sql);
?>
