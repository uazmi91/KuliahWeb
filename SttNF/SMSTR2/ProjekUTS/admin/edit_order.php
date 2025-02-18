<?php
    require_once 'header.php';
    require_once 'sidebar.php';
    require_once '../classes/produk.php';
    require_once '../classes/pesanan.php';

    $order_id = $_GET['id'];
    $products = new Produk();
    $products = $products->getAll();
    $orders = new Order();
    $order = $orders->getById($order_id);
?>

<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <form method="POST" action="../controller/order_controller.php?action=update">
                    <div class="col-md-12 mt-4">
                        <!-- nama -->
                        <div class="form-group row">
                            <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="nama_order" name="nama_order" type="text" class="form-control" value="<?= $order['nama_pemesan'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- tgl order -->
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="tgl" name="tgl" type="date" class="form-control" value="<?= $order['tanggal'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- nomor hp -->
                        <div class="form-group row">
                            <label for="no_hp" class="col-4 col-form-label">No HP</label>
                            <div class="col-8">
                                 <div class="input-group">
                                    <input id="no_hp" name="no_hp" type="number" class="form-control" value="<?= $order['no_hp'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- email -->
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="email" name="email" type="email" class="form-control" value="<?= $order['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- min stok -->
                        <div class="form-group row">
                            <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="jml_order" name="jml_order" type="number" class="form-control" value="<?= $order['jumlah_pesanan'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- produk -->
                        <div class="form-group row">
                            <label for="jumlah_pesanan" class="col-4 col-form-label">Pilih Produk</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <select id="produk_id" name="produk_id" class="custom-select">
                                        <?php foreach ($products as $product) : ?>
                                            <option value="<?= $product['id'] ?>" <?= $product['id'] == $order['produk_id'] ? 'selected' : '' ?>><?= $product['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <textarea id="alamat_order" name="alamat_order" type="text" class="form-control"><?= $order['alamat_pemesan'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Deksripsi -->
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <textarea id="desc" name="desc" cols="40" rows="5" class="form-control"><?= $order['deskripsi'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="hidden" name="pesanan_id" value="<?= $order['id'] ?>">
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