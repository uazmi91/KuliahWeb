// Class Kendaraan sebagai parent class
class Kendaraan {
    constructor(id, merk, model, tahun, hargaSewa) {
      this.id = id;
      this.merk = merk;
      this.model = model;
      this.tahun = tahun;
      this.hargaSewa = hargaSewa;
      this.tersedia = true;
    }
  
    getInfo() {
      return `${this.merk} ${this.model} (${this.tahun}) - Rp${this.hargaSewa} per hari`;
    }
  
    setTersedia(status) {
      this.tersedia = status;
    }
  }
  
  // Class Pelanggan
  class Pelanggan {
    constructor(nama, nomorTelepon) {
      this.nama = nama;
      this.nomorTelepon = nomorTelepon;
      this.kendaraanDisewa = null;
      this.tanggalMulai = null;
      this.durasi = 0;
    }
  
    // Metode untuk menyewa kendaraan
    sewaKendaraan(kendaraan, tanggalMulai, durasi) {
      if (!kendaraan.tersedia) {
        return `Maaf, ${kendaraan.getInfo()} tidak tersedia untuk disewa`;
      }
      
      this.kendaraanDisewa = kendaraan;
      this.tanggalMulai = tanggalMulai;
      this.durasi = durasi;
      kendaraan.setTersedia(false);
      
      return `${this.nama} berhasil menyewa ${kendaraan.getInfo()} selama ${durasi} hari mulai ${tanggalMulai}`;
    }
  
    // Metode untuk mengembalikan kendaraan
    kembalikanKendaraan() {
      if (!this.kendaraanDisewa) {
        return `${this.nama} tidak sedang menyewa kendaraan`;
      }
      
      const kendaraan = this.kendaraanDisewa;
      kendaraan.setTersedia(true);
      
      const totalBiaya = kendaraan.hargaSewa * this.durasi;
      
      // Reset informasi penyewaan
      this.kendaraanDisewa = null;
      this.tanggalMulai = null;
      this.durasi = 0;
      
      return `${this.nama} telah mengembalikan ${kendaraan.getInfo()}. Total biaya: Rp${totalBiaya}`;
    }
  
    // Mendapatkan info pelanggan
    getInfo() {
      let info = `Nama: ${this.nama}, Telepon: ${this.nomorTelepon}`;
      if (this.kendaraanDisewa) {
        info += `\nKendaraan yang disewa: ${this.kendaraanDisewa.getInfo()}`
        info += `\nTanggal mulai: ${this.tanggalMulai}, Durasi: ${this.durasi} hari`;
        info += `\nTotal biaya: Rp${this.kendaraanDisewa.hargaSewa * this.durasi}`;
      } else {
        info += "\nTidak sedang menyewa kendaraan";
      }
      return info;
    }
  }
  
  // Class Sistem Manajemen Transportasi
  class SistemManajemenTransportasi {
    constructor() {
      this.daftarKendaraan = [];
      this.daftarPelanggan = [];
    }
  
    // Tambah kendaraan ke sistem
    tambahKendaraan(kendaraan) {
      this.daftarKendaraan.push(kendaraan);
      return `${kendaraan.getInfo()} berhasil ditambahkan ke sistem`;
    }
  
    // Tambah pelanggan ke sistem
    tambahPelanggan(pelanggan) {
      this.daftarPelanggan.push(pelanggan);
      return `Pelanggan ${pelanggan.nama} berhasil ditambahkan ke sistem`;
    }
  
    // Mendapatkan daftar kendaraan tersedia
    getDaftarKendaraanTersedia() {
      const kendaraanTersedia = this.daftarKendaraan.filter(kendaraan => kendaraan.tersedia);
      return kendaraanTersedia;
    }
  
    // Mendapatkan daftar pelanggan yang sedang menyewa kendaraan
    getDaftarPelangganMenyewa() {
      const pelangganMenyewa = this.daftarPelanggan.filter(pelanggan => pelanggan.kendaraanDisewa !== null);
      return pelangganMenyewa;
    }
  
    // Menampilkan daftar pelanggan yang sedang menyewa kendaraan
    tampilkanDaftarPelangganMenyewa() {
      const pelangganMenyewa = this.getDaftarPelangganMenyewa();
      
      if (pelangganMenyewa.length === 0) {
        return "Tidak ada pelanggan yang sedang menyewa kendaraan";
      }
      
      let hasil = "Daftar Pelanggan yang Sedang Menyewa Kendaraan:\n";
      pelangganMenyewa.forEach((pelanggan, index) => {
        hasil += `\n${index + 1}. ${pelanggan.getInfo()}\n`;
      });
      
      return hasil;
    }
  }
  
  // Contoh penggunaan
  // Membuat instance sistem manajemen transportasi
  const sistem = new SistemManajemenTransportasi();
  
  // Menambahkan beberapa kendaraan
  const mobilAvanza = new Kendaraan(1, "Toyota", "Avanza", 2022, 350000);
  const motorNmax = new Kendaraan(2, "Yamaha", "NMAX", 2023, 150000);
  const mobilInnova = new Kendaraan(3, "Toyota", "Innova", 2021, 450000);
  
  sistem.tambahKendaraan(mobilAvanza);
  sistem.tambahKendaraan(motorNmax);
  sistem.tambahKendaraan(mobilInnova);
  
  // Menambahkan beberapa pelanggan
  const budi = new Pelanggan("Budi Santoso", "081234567890");
  const ani = new Pelanggan("Ani Wijaya", "082345678901");
  const deni = new Pelanggan("Deni Hermawan", "083456789012");
  
  sistem.tambahPelanggan(budi);
  sistem.tambahPelanggan(ani);
  sistem.tambahPelanggan(deni);
  
  // Menyewa kendaraan
  console.log(budi.sewaKendaraan(mobilAvanza, "2025-03-21", 3));
  console.log(ani.sewaKendaraan(motorNmax, "2025-03-22", 5));
  
  // Menampilkan daftar pelanggan yang sedang menyewa kendaraan
  console.log(sistem.tampilkanDaftarPelangganMenyewa());
  
  // Mengembalikan kendaraan
  console.log(budi.kembalikanKendaraan());
  
  // Menampilkan daftar pelanggan yang sedang menyewa kendaraan setelah pengembalian
  console.log(sistem.tampilkanDaftarPelangganMenyewa());