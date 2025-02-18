<?php
  require_once 'header.php';
  require_once 'classes/jenisproduk.php';
  require_once 'classes/produk.php';

  $produk = new Produk();
  $kategori_produk = new JenisProduk();

  $products = $produk->getAll();
  $categories = $kategori_produk->getAll();

?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Cari Furniture? Ayo beli sekarang di</h4>
            <h2>Furniture Store</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Furniture Store</h4>
            <h2>Barang Berkualitas</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Furniture Store</h4>
            <h2>Aman dan Terpercaya</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Products</h2>
              <a href="products.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Sofa</h4></a>
                <h6><small><del>Rp. 1.795.000 </del></small>Rp. 999.999</h6>
                <p>Sofa Berkualitas dengan bahan yang Berkualitas</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Kursi</h4></a>
                <h6><small><del>Rp. 1.099.999</del></small>Rp. 900.000</h6>
                <p>Kursi Berkualitas dengan bahan yang Berkualitas</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Meja dan Rak</h4></a>
                <h6><small><del>Rp. 799.000</del></small>Rp. 549.999</h6>
                <p>Meja Berkualitas dengan bahan yang Berkualitas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Toko online yang menyediakan berbagai macam kebutuhan Furniture rumah</p>
              <ul class="featured-list">
                <li><a href="#">Toko online Furniture terpercaya</a></li>
                <li><a href="#">Barang dipastikan Bagus</a></li>
                <li><a href="#">Pembayaran aman dan terpercaya</a></li>
                <li><a href="#">Pengiriman yang cepat</a></li>
              </ul>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Pusat Bantuan</h4>
                  <p>Jika ada pertanyaan silahkan tanyakan kepada admin</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.html" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <?php
      include_once 'footer.php';
    ?>