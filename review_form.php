
<!-- Review table -->
<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['send'])){
      $r_name= $_POST['r_name'];
      $r_email = $_POST['r_email'];
      $review = $_POST['review'];
      
      

      $request = " insert into review_form(r_name, r_email, review) values('$r_name','$r_email','$review') ";
      mysqli_query($connection, $request);

      header('location:review.php'); 
    
   }else{
      echo 'something went wrong please try again!';
   }

?>