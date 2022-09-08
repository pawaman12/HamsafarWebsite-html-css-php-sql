<!-- package table -->
<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['done'])){
      $admin_name= $_POST['admin_name'];
      $type = $_POST['type'];
      $str_from = $_POST['str_from'];
      $country = $_POST['country'];
      $city = $_POST['city'];
      $duration  = $_POST['duration'];
      
      

      $requests = " insert into package_form(admin_name, type, str_from, country, city, duration) values('$admin_name','$type','$str_from','$country','$city','$duration') ";
      mysqli_query($connection, $requests);

      header('location:admin_page.php'); 
    
   }else{
      echo 'something went wrong please try again!';
   }

?>
