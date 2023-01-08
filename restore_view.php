<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
   require_once("includes/Backend/db.php");

  //  $select_query = "SELECT * FROM php_forms";
   $select_query = "SELECT * FROM php_forms WHERE delete_status = 2 ";
   $select_form_db = mysqli_query($db_connect, $select_query);
   
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
              <a class="nav-link" href="contact_show.php"> Contacat_show page </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""> Restore Page</a>
            </li>
          </ul>
        </div>
     </nav>
    </div>
    <!-- menu bar end  -->
     <div class="col-md-12 "> 
      <div class="card mt-4 ">
       <div class="card-header text-center bg-info"> Restore Page  </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Restore  Data </h5>
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
                   <div class="btn-group">
                    <a href="restore.php?id=<?=$data['id'] ?> " class="btn btn-success btn-sm"> restore </a>
                    <a href="hard_delete.php?id=<?=$data['id'] ?> " class="btn btn-danger btn-sm"> Delete Data  </a>
                   </div>
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