<?php
    require_once 'header.php';
    require_once 'sidebar.php';
    require_once '../classes/produk.php';
    require_once '../classes/jenisproduk.php';

    $product_id = $_GET['id'];
    $products = new Produk();
    $categories = new JenisProduk();
    $product = $products->getById($product_id);
    $allCategories = $categories->getAll();
    
?>
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <form method="POST" action="../controller/produk_controller.php?action=update">
                    <div class="col-md-12 mt-4">
                        <div class="form-group row">
                            <label for="kode" class="col-4 col-form-label">Kode</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="kode" name="kode" type="text" class="form-control" value="<?= $product['kode'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="nama" name="nama" type="text" class="form-control" value="<?= $product['nama'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="hj" name="hj" type="number" class="form-control" value="<?= $product['harga_jual'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="hb" name="hb" type="number" class="form-control" value="<?= $product['harga_beli'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- stok -->
                        <div class="form-group row">
                            <label for="stok" class="col-4 col-form-label">Stok</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="stok" name="stok" type="number" class="form-control" value="<?= $product['stok'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- min stok -->
                        <div class="form-group row">
                            <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="min_stok" name="min_stok" type="number" class="form-control" value="<?= $product['min_stok'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <textarea id="desc" name="desc" cols="40" rows="5" class="form-control"><?= $product['deskripsi'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- kategori -->
                        <div class="form-group row">
                            <label for="kategori" class="col-4 col-form-label">Kategori</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                                        <?php foreach ($allCategories as $category) : ?>
                                            <option value="<?= $category['id'] ?>" <?= $category['id'] == $product['kategori_produk_id'] ? 'selected' : '' ?>><?= $category['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            <a href="list_produk.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<?php
    include_once 'footer.php';
?>