
<!-- offer table -->
<?php

   $connection = mysqli_connect('localhost','root','','hamsafar');
   error_reporting(0);
   if(isset($_POST['done'])){
      $a_name = $_POST['a_name'];
      $p_id = $_POST['p_id'];
      $percentage = $_POST['percentage'];
      $exception = $_POST['exception'];
      $starting_date = $_POST['starting_date'];
      $ending_date = $_POST['ending_date'];

      $request = " insert into offer_form(a_name, p_id, percentage, exception, starting_date, ending_date) values('$a_name','$p_id','$percentage','$exception','$starting_date','$ending_date') ";
      mysqli_query($connection, $request);

      header('location:admin_page.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>

