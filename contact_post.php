<?php
require_once("includes/Backend/db.php");
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $message = $_POST['message'];

  
  if(empty($_POST['fName'])){
    echo "Write your first name ";
  }
  else if(empty($_POST['lName'])){
    echo " write your last name ";
  }
  else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "Priovied Your  Valid email";
  }
  else if(empty($_POST['country'])){
    echo "place Select Your contry";
  }
  else if(empty($_POST['message'])){
    echo "write something";
  }
  else{
     $insert_query = "INSERT INTO php_forms (fName, lName, email, country, message  ) VALUES ('$fName', '$lName', '$email', '$country', '$message')";
     $insert_form_db = mysqli_query($db_connect, $insert_query);
     echo ($insert_form_db);
     header("location:contact_form.php");
  }
?>