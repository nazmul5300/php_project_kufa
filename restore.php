<?php
require_once("includes/Backend/db.php");
 $id = $_GET['id'];
 $restore_query = "UPDATE php_forms SET delete_status = 1 WHERE id = $id";
 $restore_form_db = mysqli_query($db_connect, $restore_query);
 header("location:restore_view.php");
?>