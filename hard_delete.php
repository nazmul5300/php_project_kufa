<?php
require_once("includes/Backend/db.php");
  $id = $_GET['id'];
  $hard_delete_query = "DELETE FROM php_forms WHERE id = $id";
  $hard_delete_form_db = mysqli_query($db_connect, $hard_delete_query);
  header("location:restore_view.php");
?>
