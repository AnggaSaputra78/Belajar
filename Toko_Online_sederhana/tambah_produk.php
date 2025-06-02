<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-4">Form Tambah Produk</h2>

  <form action="proses_form.php" method="POST" class="bg-white p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Produk:</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <div class="mb-3">
      <label for="harga" class="form-label">Harga:</label>
      <input type="number" class="form-control" id="harga" name="harga" required>
    </div>

    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi:</label>
      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
    </div>

    <div class="mb-3">
      <label for="kategori" class="form-label">Kategori:</label>
      <select class="form-select" id="kategori" name="kategori" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Elektronik">Elektronik</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="gambar" class="form-label">Link Gambar:</label>
      <input type="url" class="form-control" id="gambar" name="gambar" required>
    </div>

    <div class="d-flex justify-content-between">
      <a href="index.php" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </div>
  </form>
</div>

</body>
</html>
