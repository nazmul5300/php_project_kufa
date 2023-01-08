<?php
session_start();
   require_once("includes/Backend/header.php");

?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h2>Register</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>
                    
                    <?php
                       if(isset($_SESSION['cheack_email'])):
                      ?>
                      <button class="btn btn-info form-control "> <?php
                         echo $_SESSION['cheack_email'];
                        ?> 
                        </button>
                      
                      <?php
                      endif;
                      ?>

                    <?php
                       if(isset($_SESSION['register'])):
                      ?>
                      <button class="btn btn-info form-control "> <?php
                         echo $_SESSION['register'];
                        ?> </button>
                      
                      <?php
                      endif;
                      session_destroy();
                      ?>
                     
                    <form action="register_post.php" method="POST" class="pt-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">user_name</label>
                          <input type="text" class="form-control" name="user_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"> Email </label>
                          <input type="email" class="form-control" name="user_email" id="exampleInputPassword1" placeholder="User Email">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword2">Password</label>
                          <input type="password" name="user_password" class="form-control" id="exampleInputPassword2" placeholder="Confirm password">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-info form-control">  Register </button> 
                        </div>
                        <div class="mt-2 w-75 mx-auto">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              I accept terms and conditions
                            </label>
                          </div>
                        </div>
                        <div class="mt-2 text-center">
                          <a href="login.php"  class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</span></a>
                        </div>                 
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php
   require_once("includes/Backend/footer.php");
?>