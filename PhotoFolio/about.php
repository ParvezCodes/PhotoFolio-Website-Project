<?php
include 'components/connect.php';
session_start();

if(isset($_SESSION['user_id']))
{
   $user_id = $_SESSION['user_id'];
}
else{
   $user_id = '';
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Meet <b>Parvez</b>, a talented artist who creates a diverse range of paintings that reflect her unique perspective and creative flair. With a keen eye for color and composition, she expertly explores different styles and techniques, producing stunning pieces that showcase her versatility and mastery of the medium. Whether it's a bold, abstract canvas or a serene, realistic landscape, <b>Parvez</b>'s work is imbued with a sense of passion and authenticity that captivates viewers and invites them into her world. With each stroke of the brush, she creates a new and exciting piece that speaks to the soul and evokes a range of emotions. Get ready to be dazzled and inspired by this multi-talented artist's incredible talent and vision.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-11.png" alt="">
         <p><b>Parvez</b> is a talented painter whose portfolio showcases their ability to create diverse and engaging works of art. With a unique voice and a mastery of technique, <b>Parvez</b>'s paintings are a testament to their creativity and skill.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jenny</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p><b>Parvez</b> is a skilled painter whose works capture the essence of their subjects with precision and beauty. With an eye for detail and a talent for composition,<b>Parvez</b>'s paintings are a delight to behold.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lisa</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p><b>Parvez</b> is a talented artist whose paintings are imbued with a sense of creativity and expression. With a unique style and a passion for their craft, <b>Parvez</b>'s works are a testament to the power of art to inspire and captivate.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jack</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p> <b>Parvez</b> is a skilled and imaginative artist whose works are a testament to their creativity and vision. With a keen eye for detail and a talent for composition, <b>Parvez</b> art is a delight to behold. thanks</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zara</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p><b>Parvez</b> is a talented painter whose works capture the beauty and complexity of their subjects with skill. With a unique style and a mastery of technique,<b>Parvez</b>'s paintings are a pleasure to view and contemplate.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Andrew</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p><b>Parvez</b> is a true master of their craft, with a body of work that represents the pinnacle of artistic achievement.<b>Parvez</b>'s art is a testament to the enduring power of creativity and imagination. keep it up</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rose</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>