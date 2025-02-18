<?php
     require_once 'header.php';
     require_once 'classes/produk.php';

     $products = new Produk();
     $products = $products->getAll();
?>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">D
              <h2>Checkout</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        
        <br>
        
        <!-- Form -->
        <div class="inner-content">
          <div class="contact-form">
          <form method="POST" action="controller/order_controller.php?action=create">
               <div class="col-md-12 mt-4">
                                            
                    <div class="form-group row">
                         <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <input id="nama_order" name="nama_order" type="text" class="form-control">
                              </div>
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <input id="tgl" name="tgl" type="date" class="form-control">
                              </div>
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="no_hp" class="col-4 col-form-label">No HP</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <input id="no_hp" name="no_hp" type="number" class="form-control">
                              </div>
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="email" class="col-4 col-form-label">Email</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <input id="email" name="email" type="email" class="form-control">
                              </div>
                         </div>
                    </div>
                    <!-- min stok -->
                    <div class="form-group row">
                         <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <input id="jml_order" name="jml_order" type="number" class="form-control">
                              </div>
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="jumlah_pesanan" class="col-4 col-form-label">Pilih Produk</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <select id="produk_id" name="produk_id" class="custom-select">
                                        <option value="">Pilih Produk</option>
                                        <?php foreach ($products as $data) : ?>
                                             <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <div class="form-group row">
                         <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                         <div class="col-8">
                              <div class="input-group">
                                   <textarea id="alamat_order" name="alamat_order" type="text" class="form-control"></textarea>
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
               </div>
               <div class="form-group row">
                    <div class="offset-4 col-8">
                         <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
               </div>
          </form>
          </div>
        </div>
      </div>
    </div>

    

<?php
     include_once 'footer.php'
?>