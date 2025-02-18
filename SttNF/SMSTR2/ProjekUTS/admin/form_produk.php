<?php
require_once('header.php');
require_once('../classes/jenisproduk.php');
require_once('sidebar.php');

$kategori_produk = new JenisProduk();
$kategori = $kategori_produk->getAll();

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                <form method="POST" action="../controller/produk_controller.php?action=create">
                        <div class="col-md-12 mt-4">
                            <div class="form-group row">
                                <label for="kode" class="col-4 col-form-label">Kode</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="kode" name="kode" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="hj" name="hj" type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="hb" name="hb" type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                                            <!-- stok -->
                            <div class="form-group row">
                                <label for="stok" class="col-4 col-form-label">Stok</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="stok" name="stok" type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                                            <!-- min stok -->
                            <div class="form-group row">
                                <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="min_stok" name="min_stok" type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <textarea id="desc" name="desc" cols="40" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- kategori -->
                            <div class="form-group row">
                                <label for="kategori" class="col-4 col-form-label">Kategori</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                                            <option value="">Pilih Kategori</option>
                                            <?php foreach ($kategori as $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                <a href="list_produk.php" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <?php include_once('../admin/footer.php'); ?>