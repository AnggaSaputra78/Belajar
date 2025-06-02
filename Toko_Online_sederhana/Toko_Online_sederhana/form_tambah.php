<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
      <div class="card-body">
        <h3 class="text-center mb-4">Form Tambah Produk</h3>
        <form action="proses_form.php" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" required>
              <option value="">-- Pilih Kategori --</option>
              <option value="elektronik">Elektronik</option>
              <option value="fashion">Fashion</option>
              <option value="makanan">Makanan</option>
              <option value="minuman">Minuman</option>
              <option value="lainnya">Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Link Gambar</label>
            <input type="url" class="form-control" id="gambar" name="gambar" required>
          </div>
          <button type="submit" class="btn btn-success w-100">Tambah Produk</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
