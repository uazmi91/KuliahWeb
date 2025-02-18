<?php
    require_once 'header.php';
    require_once '../classes/jenisproduk.php';
    require_once 'sidebar.php';

    $kategori_produk = new JenisProduk();
    $datajenis = $kategori_produk->getAll();
?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Jenis</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datajenis as $data) {
                        ?>
                            <tr>
                                <td><?= $data['id'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td>
                                    <a href="../admin/edit_jenis.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="../controller/jenis_controller.php?action=delete&id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="form_jenis_produk.php" class="btn btn-success mt-4">Input Baru</a>
       
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