// Array untuk menyimpan daftar produk
const produkToko = [
    {id: 1, nama: "Laptop", harga: 7000000, stok: 5},
    {id: 2, nama: "Mouse", harga: 200000, stok: 10},
    {id: 3, nama: "Keyboard", harga: 350000, stok: 7}
  ];
  
  // Fungsi untuk menambahkan produk baru
  function tambahProduk(nama, harga, stok) {
    // Mencari ID terbesar yang ada
    let maxId = 0;
    for (let i = 0; i < produkToko.length; i++) {
      if (produkToko[i].id > maxId) {
        maxId = produkToko[i].id;
      }
    }
    
    // Menambahkan produk baru dengan ID = maxId + 1
    const produkBaru = {
      id: maxId + 1,
      nama: nama,
      harga: harga,
      stok: stok
    };
    
    produkToko.push(produkBaru);
    console.log(`Produk ${nama} berhasil ditambahkan dengan ID: ${produkBaru.id}`);
  }
  
  // Fungsi untuk menghapus produk berdasarkan ID
  function hapusProduk(id) {
    let indexProduk = -1;
    
    // Mencari index produk dengan ID yang sesuai
    for (let i = 0; i < produkToko.length; i++) {
      if (produkToko[i].id === id) {
        indexProduk = i;
        break;
      }
    }
    
    // Jika produk ditemukan, hapus dari array
    if (indexProduk !== -1) {
      const namaProduk = produkToko[indexProduk].nama;
      produkToko.splice(indexProduk, 1);
      console.log(`Produk ${namaProduk} dengan ID: ${id} berhasil dihapus`);
    } else {
      console.log(`Produk dengan ID: ${id} tidak ditemukan`);
    }
  }
  
  // Fungsi untuk menampilkan daftar produk
  function tampilkanProduk() {
    console.log("=== DAFTAR PRODUK ===");
    
    if (produkToko.length === 0) {
      console.log("Tidak ada produk tersedia");
    } else {
      for (let i = 0; i < produkToko.length; i++) {
        const produk = produkToko[i];
        console.log(`ID: ${produk.id}`);
        console.log(`Nama: ${produk.nama}`);
        console.log(`Harga: Rp ${produk.harga.toLocaleString('id-ID')}`);
        console.log(`Stok: ${produk.stok}`);
        console.log("---------------------");
      }
    }
  }
  
  // Contoh penggunaan
  console.log("Daftar produk awal:");
  tampilkanProduk();
  
  console.log("\nMenambahkan produk baru:");
  tambahProduk("Headphone", 500000, 15);
  
  console.log("\nDaftar produk setelah penambahan:");
  tampilkanProduk();
  
  console.log("\nMenghapus produk dengan ID 2:");
  hapusProduk(2);
  
  console.log("\nDaftar produk setelah penghapusan:");
  tampilkanProduk();