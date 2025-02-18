<?php
    require_once 'header.php';
    require_once '../classes/pesanan.php';
    require_once '../classes/produk.php';
    require_once 'sidebar.php';
    
    $orders = new Order();
    $order = $orders->getAllOrderWithProduct();
    $products = new Produk();
    $product = $products->getAll();
?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tgl Pesan</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jml Pesan</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($order as $data) {
                ?>
                <tr>
                  <td><?= $data['nama_pemesan'] ?></td>
                  <td><?= $data['alamat_pemesan'] ?></td>
                  <td><?= $data['tanggal'] ?></td>
                  <td><?= $data['no_hp'] ?></td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['jumlah_pesanan'] ?></td>
                  <td><?= $data['nama_produk'] ?></td>
                  <td><?= $data['deskripsi'] ?></td>
                  <td><?= number_format($data['total_harga'], 0, ',', '.') ?></td>
                  <td>
                    <a href="edit_order.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="../controller/order_controller.php?action=delete&id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
                </table>
       
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