<?php
   require_once "includes/Backend/db.php";
   $id =$_GET['id'];
   $delete_query = "DELETE FROM services WHERE id = $id";
   $delete_form_db = mysqli_query($db_connect, $delete_query);
   header("location:service.php");
?>