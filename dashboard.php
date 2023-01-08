<?php
session_start();
// if(!isset($_SESSION['login'])){
//   header("location:login.php");
// }
require_once("includes/Backend/auth_cheacking.php");
   $title = 'Dashboard';
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");

?>
  
  <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-basket icon-lg text-success"></i>
                    <div class="ml-3">
                      <p class="mb-0">Daily Order</p>
                      <h6>12569</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-rocket icon-lg text-warning"></i>
                    <div class="ml-3">
                      <p class="mb-0">Tasks Completed</p>
                      <h6>2346</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-diamond icon-lg text-info"></i>
                    <div class="ml-3">
                      <p class="mb-0">Monthly Sales</p>
                      <h6>896546</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
                    <div class="ml-3">
                      <p class="mb-0">Total Revenue</p>
                      <h6>$ 56000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <?php 
              echo $_SESSION['login'];
            ?>
           
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y') ?> <a href="#">UrbanUI</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made By Nazmul Haque  <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php
  require_once("includes/Backend/footer.php");
  ?>