<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
$title = 'Profile_edit';
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
   require_once "includes/Backend/db.php";
 
   
?>


<div class="content-wrapper">
   <div class="row">
   <div class="col-md-6 m-auto">
      <h1> Profile Edite  </h1>
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info">Profile edit  form </div>
        <div class="card-body">
        <!--  Contact Input form  -->
          <form action="profile_post.php" method="POST" enctype="multipart/form-data">
            <div class="mt-3">
              <label for=""> Old Password  </label>
              <input type="password" name="old_password" class="form-control" placeholder=" Give me old password ">
            </div>
            <div class="mt-3">
              <label for=""> New Password </label>
              <input type="password" name="new_password" class="form-control" placeholder="New Password ">
            </div>
            <div class="mt-3">
              <label for=""> Confirm  Password </label>
              <input type="password" name="confime_password" class="form-control" placeholder="Confrim Password ">
            </div>
          
            <button  type="submit" class="form-control bg-info mt-5"> Change Password </button>
          </form>
          
      </div>
     </div>
    </div>
   </div>
 </div>

<?php
  require_once("includes/Backend/footer.php");
?>
