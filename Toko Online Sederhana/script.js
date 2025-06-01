const produk = [
  {
    nama: "Laptop Gaming",
    harga: "Rp 10.000.000",
    deskripsi: "Laptop performa tinggi untuk gaming",
    gambar: "Gambar/Laptop-Gaming-Terbaik1-845x442.jpg",
    kategori: "elektronik"
  },
  {
    nama: "Kaos Polos",
    harga: "Rp 50.000",
    deskripsi: "Kaos bahan katun nyaman dipakai",
    gambar: "Gambar/CduzDuG085WOQihsCdDCuZ2mm5nXzSS9OA8sgrd9xKjA.webp",
    kategori: "fashion"
  },
  {
    nama: "Headphone Bass",
    harga: "Rp 300.000",
    deskripsi: "Headphone dengan suara bass mantap",
    gambar: "Gambar/1.MOCK-UP.png",
    kategori: "elektronik"
  },
  {
    nama: "Jaket Hoodie",
    harga: "Rp 150.000",
    deskripsi: "Jaket hangat dengan bahan fleece",
    gambar: "Gambar/9e1de7ddde70d8ecf1e4cdcd695803bb.jpeg",
    kategori: "fashion"
  }
];

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
            <div class="mt-auto fw-bold text-success">${p.harga}</div>
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

// Tampilkan semua saat halaman pertama kali dibuka
tampilkanProduk(produk);
