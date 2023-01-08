<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
$title = 'Portfolio';
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
   require_once "includes/Backend/db.php";
   
   $select_query = "SELECT * FROM portfolioes";
   $select_form_db = mysqli_query($db_connect, $select_query);
   
?>


<div class="content-wrapper">
   <div class="row">
    <div class="col-md-8">
    <h1> Portfolio  </h1>
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info">Portfolio Show Data </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Portfolio  Service Form </h5>
          <table class="table table-bordered" id="portfolio_table"> 
              <thead>
                <tr>
                  <td> Serial  </td>
                  <td> Name </td>
                  <td> Information  </td>
                  <td> Image  </td>
                  <td> Action   </td>
                </tr>
              </thead>
              <tbody>
                <?php
                $serial = 1;
                foreach($select_form_db as $data):
                ?>
                <tr>
                <td> <?=$serial++?></td>
                  <td> <?=ucwords(strtolower($data['portfolio_name'])) ?></td>
                  <td> <?=$data['portfolio_information']?></td>
                  <td> <img src="/php_web/uploads/portfolio/<?=$data['portfolio_image']?>" alt="<?=$data['portfolio_image']?> "> </td>

                  <td>
                    <a href="portfolio_edit.php?id=<?=$data['id'] ?>" class="btn btn-info btn-sm"> Edit </a>
                    <a href="#" class="btn btn-success btn-sm"> delete </a>
                  </td>
                 
                </tr>
                <?php
                  endforeach;
                ?>
              </tbody>
          </table>
      </div>
     </div>
    </div>
   <div class="col-md-4">
      <h1> Portfolio  </h1>
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info">Portfolio form </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Portfolio  Service Form </h5>
        <!--  Contact Input form  -->
          <form action="portfolio_post.php" method="POST" enctype="multipart/form-data">
            <div class="mt-3">
              <label for=""> Portfolio Name </label>
              <input type="text" name="portfolio_name" class="form-control" placeholder=" Portfolio Name ">
            </div>
            <div class="mt-3">
              <label for=""> Portfolio Information </label>
              <input type="text" name="portfolio_information" class="form-control" placeholder="Service Title ">
            </div>
            
            <div class="mt-3">
            <label for=""> Portfolio Image </label>
              <input type="file" name="portfolio_image" class="form-control" >
            </div>
            <button  type="submit" class="form-control bg-info mt-5"> Save data  </button>
          </form>
          
      </div>
     </div>
    </div>
   </div>
 </div>

<?php
  require_once("includes/Backend/footer.php");
?>

<script>
  $(document).ready(function(){
    $('#portfolio_table').DataTable({
      pageLength : 5,
      lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']]
    });
  })
</script>