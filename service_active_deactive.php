<?php
session_start();
 require_once("includes/Backend/db.php");
 $id = $_GET['id'];
 if($_GET['btn']=='active'){
   $active_count = "SELECT COUNT(*) AS active_count FROM services WHERE service_status = 2";
   $active_count_form_db = mysqli_query($db_connect, $active_count);
   if(mysqli_fetch_assoc($active_count_form_db)['active_count'] <6){
   $update_query = "UPDATE services SET service_status = 2 WHERE id = $id";
 }
 else {
   $_SESSION['service_error'] = "You can not active more than 6";
   header("location:service.php");
 }
}
 else{
  $update_query = "UPDATE services SET service_status = 1 WHERE id = $id";
 }
 $update_form_db = mysqli_query($db_connect, $update_query); 
 header("location:service.php");

?>