// **Data Produk**
let produklist = [
    { id: 1, nama: "Laptop", harga: 12000000 },
    { id: 2, nama: "Smartphone", harga: 5000000 },
    { id: 3, nama: "Headphone", harga: 800000 },
    { id: 4, nama: "Monitor", harga: 2500000 },
    { id: 5, nama: "Keyboard", harga: 350000 }
  ];
  
  // **Menampilkan Produk dengan Destructuring**
  function tampilkanProduk() {
    console.log("Daftar Produk:");
    produklist.forEach(produk => {
      const { id, nama, harga } = produk; // Destructuring
      console.log(`ID: ${id} | Nama: ${nama} | Harga: Rp${harga.toLocaleString()}`);
    });
    console.log("-----------------------");
  }
  
  // **Menambahkan Produk dengan Spread Operator**
  function tambahProduk(id, nama, harga) {
    // Menggunakan spread operator untuk menambahkan produk baru
    produklist = [...produklist, { id, nama, harga }];
    console.log(`Produk "${nama}" berhasil ditambahkan!`);
  }
  
  // **Menghapus Produk dengan Rest Parameter**
  function hapusProduk(id) {
    const index = produklist.findIndex(produk => produk.id === id);
    if (index !== -1) {
      const [removedProduct, ...restProducts] = [...produklist.slice(0, index), ...produklist.slice(index + 1)];
      produklist = restProducts;
      console.log(`Produk dengan ID ${id} berhasil dihapus!`);
    } else {
      console.log(`Produk dengan ID ${id} tidak ditemukan!`);
    }
  }
  
  // Nama fungsi event handler
  const eventHandler = {
    onTambahProduk: function(event) {
      const id = parseInt(document.getElementById('produkId').value);
      const nama = document.getElementById('produkNama').value;
      const harga = parseInt(document.getElementById('produkHarga').value);
      
      if (id && nama && harga) {
        tambahProduk(id, nama, harga);
        tampilkanProduk();
        // Reset form
        document.getElementById('produkForm').reset();
      } else {
        console.log("Semua field harus diisi!");
      }
    },
    
    onHapusProduk: function(event) {
      const id = parseInt(document.getElementById('hapusId').value);
      if (id) {
        hapusProduk(id);
        tampilkanProduk();
        document.getElementById('hapusId').value = '';
      } else {
        console.log("ID harus diisi!");
      }
    }
  };
  
  // Menampilkan data awal
  console.log("Data produk awal:");
  tampilkanProduk();
  
  // Contoh penggunaan fungsi
  console.log("Contoh penambahan data:");
  tambahProduk(6, "Table", 7000000);
  tampilkanProduk();
  
  console.log("Contoh penghapusan data:");
  hapusProduk(2);
  tampilkanProduk();
  
  // Menambahkan event listener jika dijalankan di browser
  document.addEventListener('DOMContentLoaded', function() {
    const tambahButton = document.getElementById('tambahButton');
    const hapusButton = document.getElementById('hapusButton');
    
    if (tambahButton) {
      tambahButton.addEventListener('click', eventHandler.onTambahProduk);
    }
    
    if (hapusButton) {
      hapusButton.addEventListener('click', eventHandler.onHapusProduk);
    }
  });