<?php
    require_once "includes/Backend/db.php";
   $service_id = $_POST['service_id'];
   $service_icon = $_POST['service_icon'];
   $service_title = $_POST['service_title'];
   $service_des = $_POST['service_des'];

   $update_edit_query = "UPDATE services SET  service_icon = '$service_icon',  service_title = '$service_title', service_des = '$service_des' WHERE  id= $service_id";
   $service_update_form_db = mysqli_query($db_connect, $update_edit_query);
   header("location:service.php");
   
?>