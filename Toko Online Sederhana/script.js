function fetchProduk() {
  fetch('get_produk.php')
    .then(res => res.json())
    .then(data => {
      produk = data;
      filterProduk(); // tampilkan dengan filter aktif
    });
}

function tambahProduk() {
  const nama = prompt("Nama produk:");
  const harga = prompt("Harga:");
  const deskripsi = prompt("Deskripsi:");
  const gambar = prompt("URL Gambar:");
  const kategori = prompt("Kategori:");

  if (nama && harga && deskripsi && gambar && kategori) {
    fetch('add_produk.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: `nama=${nama}&harga=${harga}&deskripsi=${deskripsi}&gambar=${gambar}&kategori=${kategori}`
    }).then(fetchProduk);
  }
}

function editProduk(id) {
  const p = produk.find(p => p.id == id);
  const nama = prompt("Edit nama:", p.nama);
  const harga = prompt("Edit harga:", p.harga);
  const deskripsi = prompt("Edit deskripsi:", p.deskripsi);
  const gambar = prompt("Edit gambar:", p.gambar);
  const kategori = prompt("Edit kategori:", p.kategori);

  if (nama && harga && deskripsi && gambar && kategori) {
    fetch('edit_produk.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: `id=${id}&nama=${nama}&harga=${harga}&deskripsi=${deskripsi}&gambar=${gambar}&kategori=${kategori}`
    }).then(fetchProduk);
  }
}

function hapusProduk(id) {
  if (confirm("Yakin hapus produk ini?")) {
    fetch('delete_produk.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: `id=${id}`
    }).then(fetchProduk);
  }
}

function tampilkanProduk(data) {
  const container = document.getElementById("produk-container");
  container.innerHTML = "";

  data.forEach(p => {
    container.innerHTML += `
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="${p.gambar}" class="card-img-top" alt="${p.nama}" style="height:200px; object-fit:cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">${p.nama}</h5>
            <p class="card-text">${p.deskripsi}</p>
            <div class="fw-bold text-success">${p.harga}</div>
            <p class="text-muted"><small>${p.kategori}</small></p>
            <div class="mt-auto d-flex justify-content-between">
              <button class="btn btn-sm btn-primary" onclick="editProduk(${p.id})">Edit</button>
              <button class="btn btn-sm btn-danger" onclick="hapusProduk(${p.id})">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    `;
  });
}

function filterProduk() {
  const kategori = document.getElementById("kategori").value;
  const hasil = kategori === "semua" ? produk : produk.filter(p => p.kategori === kategori);
  tampilkanProduk(hasil);
}

let produk = [];
fetchProduk(); // initial load
