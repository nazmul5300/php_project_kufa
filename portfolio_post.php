<?php
require_once "includes/Backend/db.php";
if($_FILES['portfolio_image']['name']){   //ai if maddo me image thakbe kina atar jonno 
 
  $file_name = $_FILES['portfolio_image']['name'];
  $explode = explode(".", "$file_name");
  $file_extention = end($explode); // Orginall extention for file 
  $excepted_extention = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG'); // File supported 
  if(in_array($file_extention, $excepted_extention)){
   if($_FILES['portfolio_image']['size'] <= 50000){
     // File size for byte to kb 
     $portfolio_name = $_POST['portfolio_name'];
     $portfolio_information = $_POST['portfolio_information'];
     //insert query 
     $portfolio_insert_query = "INSERT INTO portfolioes (portfolio_name, portfolio_information) VALUES ('$portfolio_name','$portfolio_information' )";
     $portfolio_form_db = mysqli_query($db_connect, $portfolio_insert_query);
     $last_id_form_db = mysqli_insert_id($db_connect); // databate to id Number showo

     $new_file_name = $last_id_form_db.".".$file_extention;  // explode er extention ar fileextention 
     
     //file location 
     $new_location = "uploads/portfolio/".$new_file_name;
     move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $new_location );  //uploade form db to folder e 
     //Update query 
     $portfolio_update = "UPDATE portfolioes SET portfolio_image = '$new_file_name' WHERE id =$last_id_form_db";
     mysqli_query($db_connect, $portfolio_update);
     header("location:portfolio_view.php");

   }
   else{
     echo " Your File size is not supported ";
   }
  }
  else{
   echo "Your File formate is not Supported";
  }
}
else{
  echo "Place your image attach ";
}


?>