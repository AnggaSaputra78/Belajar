const form = document.getElementById('form');
const list = document.getElementById('list');
const input = document.getElementById('nama');

let data = [];

// Load data dari backend
function loadData() {
  fetch('backend.php')
    .then(res => res.json())
    .then(json => {
      data = json;
      showList();
    });
}

function showList() {
  list.innerHTML = '';
  data.forEach((item, index) => {
    const li = document.createElement('li');
    li.innerHTML = `
      ${item}
      <span>
        <button onclick="editItem(${index})">Edit</button>
        <button onclick="deleteItem(${index})">Hapus</button>
      </span>
    `;
    list.appendChild(li);
  });
}

form.addEventListener('submit', e => {
  e.preventDefault();
  const nama = input.value.trim();
  if (nama === '') return;
  data.push(nama);
  saveData();
  input.value = '';
});

function editItem(index) {
  const baru = prompt('Edit data:', data[index]);
  if (baru !== null) {
    data[index] = baru;
    saveData();
  }
}

function deleteItem(index) {
  if (confirm('Yakin ingin hapus?')) {
    data.splice(index, 1);
    saveData();
  }
}

function saveData() {
  fetch('backend.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
    .then(() => loadData());
}

loadData();
