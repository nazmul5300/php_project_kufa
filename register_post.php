<?php
session_start();
require_once("includes/Backend/db.php");

  if(empty($_POST['user_name'])){
    echo "write Your User Name";
  }
  else if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
     echo "Provied Your Valid Email";
  }
  else if(empty ($_POST['user_password'])){
    echo "Provied Your Strong Your Password";
  }
  else{
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = md5($_POST['user_password']);
    $select_query = "SELECT * FROM users WHERE user_email = '$user_email'";
    $email_cheack_form_db = mysqli_query($db_connect, $select_query);
    if($email_cheack_form_db->num_rows == 1){
      $_SESSION['cheack_email'] = "Your Email Already Use";
      header("location:register.php");
    }
   else{
    $insert_query = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";
    $register_form_db = mysqli_query($db_connect, $insert_query);
    $_SESSION['register'] = "Your Register Successfull";
    header("location:register.php");
   }
  }

?>