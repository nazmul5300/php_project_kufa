<?php 
require_once("includes/Backend/db.php");
$id = $_GET['id'];
// $delet_query = "DELETE FROM php_forms WHERE id = $id";
$soft_delet_query = "UPDATE php_forms SET delete_status = 2 WHERE id = $id";
$delet_form_db = mysqli_query($db_connect, $soft_delet_query);
header("location:contact_show.php");
 
?> 