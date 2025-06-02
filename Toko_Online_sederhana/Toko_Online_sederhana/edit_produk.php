<?php
include 'db.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST['deskripsi'];
  $kategori = $_POST['kategori'];
  $gambar = $_POST['gambar'];

  $update = mysqli_query($conn, "UPDATE produk SET
    nama = '$nama',
    harga = '$harga',
    deskripsi = '$deskripsi',
    kategori = '$kategori',
    gambar = '$gambar'
    WHERE id = $id
  ");

  if ($update) {
    header("Location: index.php");
    exit;
  } else {
    echo "Gagal update data!";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <h2>Edit Produk</h2>
  <form method="POST">
    <div class="mb-3">
      <label>Nama Produk</label>
      <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="3"><?= $data['deskripsi'] ?></textarea>
    </div>
    <div class="mb-3">
      <label>Kategori</label>
      <select name="kategori" class="form-select" required>
        <option <?= $data['kategori'] == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
        <option <?= $data['kategori'] == 'Pakaian' ? 'selected' : '' ?>>Pakaian</option>
        <option <?= $data['kategori'] == 'Makanan' ? 'selected' : '' ?>>Makanan</option>
        <option <?= $data['kategori'] == 'Minuman' ? 'selected' : '' ?>>Minuman</option>
        <option <?= $data['kategori'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Link Gambar</label>
      <input type="url" name="gambar" class="form-control" value="<?= $data['gambar'] ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
  </form>
</body>
</html>
