<?php
  require_once 'header.php';
  require_once 'sidebar.php';
?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <h2>Pengelolaan Order dan produk</h2>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">List Produk</h5>
                        <p class="card-text"></p>
                        <a href="list_produk.php" class="btn btn-primary">Go</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">List Order</h5>
                        <p class="card-text"></p>
                        <a href="list_order.php" class="btn btn-primary">Go</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Jenis Produk</h5>
                        <p class="card-text"></p>
                        <a href="list_jenis.php" class="btn btn-primary">Go</a>
                      </div>
                    </div>
                  </div>
                </div>
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