<?php
  require_once 'header.php';
?>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>
<?php
  include_once 'footer.php'
?>