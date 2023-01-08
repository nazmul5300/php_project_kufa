<?php
session_start();
  require_once ("includes/Backend/db.php");
  $new_password = md5($_POST['new_password']);
    // print_r("#". str_replace("", "",$_POST['new_password']) ."#" );


  $confime_password = md5($_POST['confime_password']);
  if(empty($_POST['old_password']) || empty($_POST['new_password']) || empty($_POST['confime_password'])){
    echo " Your fild is blank";
  }
  else if($_POST['new_password'] == $_POST['old_password']){
    echo "Your new password or Old password match";
  }
  else if($_POST['new_password'] == ($_POST['confime_password'])){
    $old_password = md5($_POST['old_password']);
    // $confime_password = md5($_POST['confime_password']);
    $user_email = $_SESSION['user_email'];
    $cheack_query = "SELECT COUNT(*) AS total_count FROM users WHERE user_email='$user_email' AND user_password = '$old_password'";
    $cheack_form_db = mysqli_query($db_connect, $cheack_query);
    
    if(mysqli_fetch_assoc($cheack_form_db)['total_count']== 1){
      $password_update_query = "UPDATE users SET user_password = '$new_password' WHERE user_email= '$user_email'";
      $password_update_form_db = mysqli_query($db_connect, $password_update_query);
    }
    else{
     echo "nai";
    }
  
  }
  else{
    echo " Your confirm Password do not match ";
  }
 

?>