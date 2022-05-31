<title>House Image Gallery</title>
<div>
<?php 
include("navbar.php");

 ?>
 </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="Gallery.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

  <div class="wrapper">
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="Dhanmondi">Dhanmondi</span>
        <span class="item" data-name="Zigatala">Zigatala</span>
        <span class="item" data-name="Panthapath">Panthapath</span>
        <span class="item" data-name="Nilkhet">Nilkhet</span>
        <span class="item" data-name="Shankar">Shankar</span>
      </div>
    </nav>
    <div class="gallery">
      <div class="image" data-name="Dhanmondi"><span><img src="images/0.jpg" alt="abc"></span></div>
      
      <div class="image" data-name="Nilkhet"><span><img src="images/2.jpg" alt=""></span></div>
      <div class="image" data-name="Zigatala"><span><img src="images/3.jpg" alt=""></span></div>
      <div class="image" data-name="headphone"><span><img src="images/4.jpg" alt=""></span></div>
      <div class="image" data-name="Panthapath"><span><img src="images/5.jpg" alt=""></span></div>
      <div class="image" data-name="Zigatala"><span><img src="images/6.jpg" alt=""></span></div>
      <div class="image" data-name="Nilkhet"><span><img src="images/7.jpg" alt=""></span></div>
      <div class="image" data-name="Nilkhet"><span><img src="images/8.jpg" alt=""></span></div>
      <div class="image" data-name="Shankar"><span><img src="images/9.jpg" alt=""></span></div>
      <div class="image" data-name="Shankar"><span><img src="images/10.jpg" alt=""></span></div>
    </div>
  </div>
  <div class="preview-box">
    <div class="details">
      <span class="title">Location: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

  <script src="script.js"></script>
  <br>

 <footer>
   <div>
 <?php 

include("footer.html");

 ?>
 </div>
 </footer>

</body>
</html>
