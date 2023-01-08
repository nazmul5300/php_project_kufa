<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
   require_once("includes/Backend/db.php");
   

  //  $select_query = "SELECT * FROM php_forms";
   $select_query = "SELECT * FROM php_forms WHERE delete_status = 1 ";
   $select_form_db = mysqli_query($db_connect, $select_query);

   $total_count_query = "SELECT COUNT(*) AS total_count FROM php_forms";
   $total_count_form_db = mysqli_query($db_connect, $total_count_query);
   $total_count = mysqli_fetch_assoc($total_count_form_db);

   
   $read_count_query = "SELECT COUNT(*) AS read_count FROM php_forms WHERE status =2";
   $read_count_form_db = mysqli_query($db_connect, $read_count_query);
   $total_read_count = mysqli_fetch_assoc($read_count_form_db);

   $unread_count_query = "SELECT COUNT(*) AS unread_count FROM php_forms WHERE status =1";
   $unread_count_form_db = mysqli_query($db_connect, $unread_count_query);
   $total_unread_count = mysqli_fetch_assoc($unread_count_form_db);

   $soft_count_query = "SELECT COUNT(*) AS soft_count FROM php_forms WHERE delete_status =2";
   $soft_count_form_db = mysqli_query($db_connect, $soft_count_query);
   $total_soft_count = mysqli_fetch_assoc($soft_count_form_db);
   
?>
 
 <div class="content-wrapper">
   <div class="row">
     <!-- menus bar -->
   <div class="col-md-8 offset-2">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarText">
           <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="contact_form.php"> contact_form_page </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="restore_view.php"> Restore</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="restore_view.php"> Restore Page </a>
            </li>
          </ul>
        </div>
     </nav>
    </div>
    <!-- menu bar end  -->
     <div class="col-md-12 ">
     <div class="row mt-3">
     <div class="col-md-3">
        <h1> Total_count : <?=$total_count['total_count'] ?></h1>
      </div> 
      <div class="col-md-3">
        <h1> Read : <?= $total_read_count['read_count'] ?></h1>
      </div> 
      <div class="col-md-3">
        <h1> UnRead: <?php echo $total_unread_count['unread_count'] ?></h1>
      </div> 
      <div class="col-md-3">
        <a href="restore_view.php"> <h1> Soft_Delete : <?=$total_soft_count['soft_count'] ?></h1> </a> 
      </div> 
     
     </div>
      <div class="card mt-4 ">
       <div class="card-header text-center bg-info">Contact form </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Information Show Data </h5>
        <!--  Contact Input form  -->
         <table class="table">
           <thead>
            <tr> 
              <th> Serial </th>
              <th> Id </th>
              <th> Frist Name </th>
              <th> Last Name </th>
              <th> Email </th>
              <th> Country  </th>
              <th> Message </th>
              <th> Status </th>
              <th> Action </th>
            </tr>
            <tbody>

              <?php
              $serial = 1;
               foreach($select_form_db as $data):
              ?>
              <tr class="<?php
                if($data['status'] == 1){
                  echo 'bg-success';
                }
              ?>
              ">
                <td> <?=$serial++ ?> </td>
                <td> <?=$data['id'] ?> </td>
                <td> <?=$data['fName'] ?> </td>
                <td> <?=$data['lName'] ?> </td></td>
                <td> <?=$data['email'] ?> </td>
                <td> <?=$data['country'] ?> </td>
                <td> <?=$data['message'] ?> </td>
                <td> <?=$data['status'] ?> </td>
                <td>
                 <?php 
                   if($data['status']== 1):
                 ?>
                  <a href="contact_read.php?id=<?=$data['id'] ?>" class="btn btn-primary btn-sm "> Read </a>
                  <?php 
                     endif;
                  ?>
                 
                  <a href="contact_delete.php?id=<?=$data['id'] ?>" class="btn btn-danger btn-sm "> Soft_delete </a>
                </td>
                
              </tr>
              <?php
               endforeach
              ?>
            </tbody>
                <tr> 
                  <?php 
                    if($select_form_db->num_rows == 0):
                  ?>
                  <td colspan="50" class="text-center text-danger"> <h1>  No Data information </h1>
                  </td>
                  <?php
                    endif;
                   ?>
                </tr>
           </thead> 

         </table>
      </div>
     </div>
    </div>
   </div>
 </div>
<?php
  require_once("includes/Backend/footer.php");
 ?>