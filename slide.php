
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="slide.css">
</head>
<body>
    <div class="container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="images/00.jpg" alt="12"></div>
              <div class="swiper-slide"><img src="images/slide3.jpg" alt=""></div>
              <div class="swiper-slide"><img src="images/b22-01.jpg" alt=""></div>
              <div class="swiper-slide"><img src="https://image.shutterstock.com/shutterstock/photos/1161331867/display_1500/stock-photo-aerial-drone-shot-of-dhaka-during-sunrise-bird-s-eye-view-of-lake-buildings-and-bridges-1161331867.jpg" alt=""></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },

  loop: true,


  pagination: {
    el: '.swiper-pagination',
    clickable :true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
    </script>
</body>
</html>