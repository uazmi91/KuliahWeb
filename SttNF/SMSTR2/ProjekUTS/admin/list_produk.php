<?php
    require_once 'header.php';
    require_once 'sidebar.php';
    require_once '../classes/produk.php';

     $produk = new Produk();
     $datas = $produk->getAll();
?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
               
            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Jenis produk</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($datas as $data) {
                ?>
                    <tr>
                        <td><?= $data['kode'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['stok'] ?></td>
                        <td><?= $data['harga_jual'] ?></td>
                        
                        <td><?= $data['kategori_produk_id']?></td>
                        <td>
                            <a href="../admin/edit_produk.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="../controller/produk_controller.php?action=delete&id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
                </table>
                <a href="form_produk.php" class="btn btn-success mt-4">Input Baru</a>
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