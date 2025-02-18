<?php
include_once('../classes/database.php');
include_once('../classes/produk.php');

$produk = new Produk();

$action = $_GET['action'];
// create
if ($action == 'create') {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['hj'];
    $harga_beli = $_POST['hb'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['desc'];
    $kategori = $_POST['jenis_produk_id'];

    $result = $produk->create($kode, $nama, $harga_jual, $harga_beli, $stok, $min_stok, $deskripsi, $kategori);
} 
// update
else if ($action == 'update') {
    $id = $_POST['product_id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['hj'];
    $harga_beli = $_POST['hb'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['desc'];
    $kategori = $_POST['jenis_produk_id'];

    $result = $produk->update($id, $kode, $nama, $harga_jual, $harga_beli, $stok, $min_stok, $deskripsi, $kategori);
} 
// delete
else if ($action == 'delete') {
    $id = $_GET['id'];

    $result = $produk->delete($id);
}

if ($result) {
    header('Location: ../admin/list_produk.php');
} else {
    echo "Gagal";
}
