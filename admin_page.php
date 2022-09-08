
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!--Logo-->
   <link rel="shortcut icon" type="image/png" href="images/logoham.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


   

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">HAMSAFAR.</a>

   <nav class="navbar">
   <a href="home1.php">home</a>
      <a href="admin_booking.php">bookings</a>
      <a href="admin_review.php">Reviews</a>
      <a href="admin_question.php">Questions</a>
      <a <span>Welcome Admin</span></a>

      <a href="logout.php">logout</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Admin</h1>
</div>

<!-- packages section starts  -->

<section class="package">

   <h1 class="heading-title">Add A New Package!</h1>

   <form action="admin_package.php" method="post" class="admin-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="admin_name">
         </div>
         <div class="inputBox">
            <span>package type :</span>
            <input type="text" placeholder="economical/ decent/ business class" name="type">
         </div>
         <div class="inputBox">
            <span>starting from (Rs) :</span>
            <input type="number" placeholder="starting from(Rs)" name="str_from">
         </div>
         <div class="inputBox">
            <span>country :</span>
            <input type="text" placeholder="enter the country" name="country">
         </div>
         <div class="inputBox">
            <span>city :</span>
            <input type="text" placeholder="enter the city" name="city">
         </div>
         <div class="inputBox">
            <span>duration :</span>
            <input type="number" placeholder="enter the no of days" name="duration">
         </div>
      </div>

      <input type="submit" value="DONE" class="btn" name="done">
      

   </form>

</section>

<!-- packages section ends -->

<!-- offer section starts  -->

<section class="offer">

   <h1 class="heading-title">Add A New Offer!</h1>

   <form action="admin_offer.php" method="post" class="admin-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="a_name">
         </div>
         <div class="inputBox">
            <span>package id:</span>
            <input type="number" placeholder="enter package id" name="p_id">
         </div>
         <div class="inputBox">
            <span>discount percentage</span>
            <input type="number" placeholder="enter discount percentage (%)" name="percentage">
         </div>
         <div class="inputBox">
            <span>exceptions:</span>
            <input type="text" placeholder="enter the exceptions" name="exception">
         </div>
         <div class="inputBox">
            <span>starting date:</span>
            <input type="date" placeholder="enter starting date" name="starting_date">
         </div>
         <div class="inputBox">
            <span>ending date:</span>
            <input type="date" placeholder="enter ending date" name="ending_date">
         </div>
      </div>

      <input type="submit" value="DONE" class="btn" name="done">
      

   </form>

</section>

<!-- booking section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>

</body>
</html>