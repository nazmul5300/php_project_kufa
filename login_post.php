<?php 
session_start();
require_once("includes/Backend/db.php");  

  $user_email = $_POST['user_email'];
  $user_password = md5($_POST['user_password']);
  $login_query = "SELECT * FROM users  WHERE user_email = '$user_email' AND user_password = '$user_password'";

  $login_form_db = mysqli_query($db_connect, $login_query);
  if($login_form_db->num_rows == 1){
    $_SESSION['login'] = "login Successful";
    $_SESSION['user_email'] = $user_email;
    header("location:dashboard.php");
 
   }
   else{
    $_SESSION['error'] = "Your email Or Password Wrong ";
     header("location:login.php");
   }

?>