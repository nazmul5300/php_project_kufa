<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
$title = 'Portfolio_edit';
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
   require_once "includes/Backend/db.php";
   
   $id = $_GET['id'];
   $portfolio_edit_query = "SELECT * FROM portfolioes WHERE id = $id" ;
   $portfolio_edit_form_data = mysqli_query($db_connect, $portfolio_edit_query);
   $after_assoc = mysqli_fetch_assoc($portfolio_edit_form_data);
 
 
   
?>


<div class="content-wrapper">
   <div class="row">
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info"> Portfolio Update  </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Portfolio Update  Service </h5>
        <!--  Contact Input form  -->
          <form action="portfolio_edit_post.php" method="POST" enctype="multipart/form-data">
            <div class="mt-3">
              <input type="text" name="portfolio_id" value=" <?=$after_assoc['id'] ?>">
              <label for=""> Portfolio Name </label>
              <input type="text" name="portfolio_name" class="form-control" placeholder=" Portfolio Name " value="<?=$after_assoc['portfolio_name'] ?>">
            </div>
            <div class="mt-3">
              <label for=""> Portfolio Information </label>
              <input type="text" name="portfolio_information" class="form-control" placeholder="Service Title " value="<?=$after_assoc['portfolio_information'] ?>">
            </div>

            <img src="/php_web/uploads/portfolio/<?=$after_assoc['portfolio_image']?>" alt="<?=$data['portfolio_image']?> ">

            <div class="mt-3">
            <label for=""> Portfolio Image </label>
              <input type="file" name="portfolio_image" class="form-control" >
            </div>
            <button  type="submit" class="form-control bg-info mt-5"> Update data  </button>
          </form>
          
      </div>
     </div>
    </div>
   </div>
 </div>

<?php
  require_once("includes/Backend/footer.php");
?>
