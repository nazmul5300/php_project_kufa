<?php 
require_once("includes/Backend/db.php");
  $id = ($_GET['id']);
  $read_query = "UPDATE php_forms SET status = 2 WHERE id = $id";
  $read_form_db = mysqli_query($db_connect, $read_query);
  header("location:contact_show.php");
?>