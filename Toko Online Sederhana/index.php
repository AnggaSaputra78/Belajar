<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Toko Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h1 class="text-center">Daftar Produk</h1>
  <div class="row">
    <?php
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)):
    ?>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="gambar produk">
        <div class="card-body">
          <h5 class="card-title"><?= $row['nama_produk']; ?></h5>
          <p class="card-text"><?= $row['deskripsi']; ?></p>
          <p><strong>Harga:</strong> Rp<?= number_format($row['harga']); ?></p>
          <p><strong>Stok:</strong> <?= $row['stok']; ?></p>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>
</body>
</html>
