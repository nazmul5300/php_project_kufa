<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
   require_once "includes/Backend/db.php";

   $select_query = "SELECT * FROM services ";
   $select_form_db = mysqli_query($db_connect, $select_query);
   $active_count = "SELECT COUNT(*) AS active_count FROM services WHERE service_status = 2";
   $active_count_form_db = mysqli_query($db_connect, $active_count);
   
?>

<div class="content-wrapper">
   <div class="row">
   <div class="col-md-8">
     <?php 
        if(isset($_SESSION['service_error'])):
      ?>
       <div class="alert alert-danger ">
         <?php 
          echo $_SESSION['service_error'];
          ?>
       </div>
      <?php
      endif;
      unset($_SESSION['service_error']);
      ?>
    <h1> Icon List : Active_count:-<?=mysqli_fetch_assoc($active_count_form_db)['active_count']; ?>  </h1>
       <table class="table table-boreded">
          <thead>
            <tr>
              <th> Id </th>
              <th> Icon  </th>
              <th> Title </th>
              <th> Description </th>
              <th> Action  </th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($select_form_db as $data):
            ?>
            <tr>
              <td> <?=$data['id'] ?></td>
              <td> <?=$data['service_icon'] ?></td>
              <td> <?=$data['service_title'] ?></td>
              <td> <?=$data['service_des'] ?></td>
              <td>
               
                <a href="service_edit.php?id=<?=$data['id'] ?>" type="submit" class="btn btn-info btn-sm"> Edit </a>
              
                <button class="btn btn-danger delete-btn btn-sm" value="service_delete.php?id=<?=$data['id'] ?>" > delete </button>


               <?php if($data['service_status'] == 1): ?>
                <a href="service_active_deactive.php?id=<?=$data['id'] ?>&btn=active" type="submit" class="btn btn-success btn-sm"> Active </a>
              <?php endif; ?>
              <?php if($data['service_status'] == 2): ?>
                <a href="service_active_deactive.php?id=<?=$data['id'] ?>&btn=deactive" type="submit" class="btn btn-primary btn-sm"> Deactive </a>
                <?php endif ?>
              
              
              </td>
            </tr>
            <?php
            endforeach;
            ?>
          </tbody>
       </table>  
    </div>
    <!-- menu bar end  -->
     <div class="col-md-4">  
      <h1> Add List </h1>
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info">Service form </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Information Service Form </h5>
        <!--  Contact Input form  -->
          <form action="service_post.php" method="POST">
            <div class="mt-3">
              <label for=""> Service Icon </label>
              <input type="text" name="service_icon" class="form-control" placeholder=" Service Icon ">
            </div>
            <div class="mt-3">
              <label for=""> Service Title </label>
              <input type="text" name="service_title" class="form-control" placeholder="Service Title ">
            </div>
            
            <div class="mt-3">
              <label for=""> Description </label>
             <textarea name="service_des" rows="4" class="form-control">  </textarea>
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
    $('.delete-btn').click(function(){
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
           var nazmul = $(this).val();
           window.location.href = nazmul;
          }
        })
    })
  })
</script>