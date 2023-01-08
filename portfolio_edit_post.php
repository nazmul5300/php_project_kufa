<?php
// print_r($_POST);
// print_r($_FILES);
require_once "includes/Backend/db.php";
$portfolio_id = $_POST['portfolio_id'];
$portfolio_name = $_POST['portfolio_name'];
$portfolio_information = $_POST['portfolio_information'];
if($_FILES['portfolio_image']['name']){
  echo "ase";
}
else{
  $update_query = "UPDATE portfolioes SET portfolio_name= '$portfolio_name', portfolio_information = '$portfolio_information' WHERE id = $portfolio_id";
  $update_form_db = mysqli_query($db_connect, $update_query);
  header("location:portfolio_view.php");
}

?>