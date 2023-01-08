<?php
 require_once "includes/Backend/db.php";
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
  $id = $_GET['id'];
  $select_query = "SELECT * FROM services WHERE id= $id";
  $select_form_db = mysqli_query($db_connect, $select_query);
  $after_assoc = mysqli_fetch_assoc($select_form_db);
?>

<div class="content-wrapper">
   <div class="row">
    <!-- menu bar end  -->
     <div class="col-md-6 offset-3">  
      <h1> Show Data  </h1>
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info">Service Show Data </div>
        <div class="card-body">
        <!--  Contact Input form  -->
          <form action="service_edit_post.php" method="POST">
            <div class="mt-3">
              <input type="hidden"  name="service_id" value="<?=$id ?>">
              <label for=""> Service Icon </label>
              <input type="text" name="service_icon" class="form-control" placeholder=" Service Icon " value="<?=$after_assoc['service_icon']?>">
            </div>
            <div class="mt-3">
              <label for=""> Service Title </label>
              <input type="text" name="service_title" class="form-control" placeholder="Service Title" value="<?=$after_assoc['service_title']?>">
            </div>
            
            <div class="mt-3">
              <label for=""> Description </label>
             <textarea name="service_des" rows="4" class="form-control"> <?=$after_assoc['service_title']?>  </textarea>
            </div>
            <button  type="submit" class="form-control bg-info mt-5"> Edit Data  </button>
          </form>
          
      </div>
     </div>
    </div>
   </div>
 </div>







<?php
  require_once("includes/Backend/footer.php");
?>