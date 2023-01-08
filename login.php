<?php
session_start();
$title='Login';
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/db.php");
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
                    <h2>Login</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>
                   
                      <?php
                       if(isset($_SESSION['error'])):
                      ?>
                      <button class="btn btn-info form-control "> <?php
                         echo $_SESSION['error'];
                        ?> </button>
                      
                      <?php
                      endif;
                      session_destroy();
                      ?>
                  
                    <form action="login_post.php" method="POST" class="pt-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">User Email </label>
                          <input type="text" class="form-control" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Email">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword2">User Password</label>
                          <input type="password" name="user_password" class="form-control" id="exampleInputPassword2" placeholder="Confirm password">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-info form-control">  Login  </button> 
                        </div>  
                        <div class="mt-3 text-center">
                          <a href="#" class="auth-link text-black">Forgot password?</a>
                        </div>           
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
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