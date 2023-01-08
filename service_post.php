
<?php
require_once "includes/Backend/db.php";

if(empty($_POST['service_icon'])){
  echo "Place Your Service  icon text";
}
else if(empty($_POST['service_title'])){
  echo "Place Your  Service Icon Title ";
}
else if(empty($_POST['service_des'])){
  echo "Place Your Service Description";
}
else{
  $service_icon =$_POST['service_icon'];
  $service_title =$_POST['service_title'];
  $service_des =$_POST['service_des'];

  $service_query = "INSERT INTO services (service_icon, service_title, service_des) VALUES ('$service_icon', '$service_title', '$service_des')";
  $service_form_db = mysqli_query($db_connect, $service_query);
  header("location:service.php");
}
?>