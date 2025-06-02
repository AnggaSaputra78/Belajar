<?php
include 'db.php';

$filter = isset($_GET['kategori']) ? $_GET['kategori'] : 'semua';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM produk WHERE 1";

if ($filter != 'semua') {
  $filter = mysqli_real_escape_string($conn, $filter);
  $sql .= " AND kategori = '$filter'";
}

if (!empty($search)) {
  $search = mysqli_real_escape_string($conn, $search);
  $sql .= " AND nama LIKE '%$search%'";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Toko Online Sederhana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      transition: all 0.2s ease-in-out;
    }
    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .product-img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <?php if (isset($_GET['sukses'])): ?>
    <div class="alert alert-success text-center">Produk berhasil ditambahkan!</div>
  <?php endif; ?>

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-primary">🛒 Toko Online</h1>
    <a href="tambah_produk.php" class="btn btn-success">+ Tambah Produk</a>
  </div>

  <!-- Form Filter & Search -->
  <form method="GET" class="row g-3 mb-4">
    <div class="col-md-4">
      <label for="kategori" class="form-label">Kategori:</label>
      <select name="kategori" id="kategori" class="form-select">
        <?php
        $kategoriList = ['semua', 'Elektronik', 'Pakaian', 'Makanan', 'Minuman', 'Lainnya'];
        foreach ($kategoriList as $kategoriOption):
          $selected = ($filter == $kategoriOption) ? 'selected' : '';
        ?>
          <option value="<?= $kategoriOption ?>" <?= $selected ?>>
            <?= ucfirst($kategoriOption) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="col-md-5">
      <label for="search" class="form-label">Cari Produk:</label>
      <input type="text" name="search" id="search" class="form-control"
             value="<?= htmlspecialchars($search) ?>" placeholder="Nama produk...">
    </div>

    <div class="col-md-3 d-grid">
      <label class="form-label invisible">Cari</label>
      <button type="submit" class="btn btn-primary">🔍 Cari</button>
    </div>
  </form>

  <!-- Produk -->
  <div class="row gy-4">
    <?php if (mysqli_num_rows($result) > 0): ?>
      <?php while ($produk = mysqli_fetch_assoc($result)): ?>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="<?= htmlspecialchars($produk['gambar']) ?>" class="card-img-top product-img" alt="<?= htmlspecialchars($produk['nama']) ?>">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($produk['nama']) ?></h5>
              <p class="card-text"><?= htmlspecialchars($produk['deskripsi']) ?></p>
              <p class="fw-bold text-success">Rp<?= number_format((float)$produk['harga'], 0, ',', '.') ?></p>
              <span class="badge bg-secondary"><?= htmlspecialchars($produk['kategori']) ?></span>
            </div>
            <div class="card-footer bg-white d-flex justify-content-between">
              <a href="edit_produk.php?id=<?= $produk['id'] ?>" class="btn btn-sm btn-outline-warning">Edit</a>
              <a href="hapus_produk.php?id=<?= $produk['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="col-12">
        <div class="alert alert-warning text-center">Tidak ada produk ditemukan.</div>
      </div>
    <?php endif; ?>
  </div>
</div>

</body>
</html>