<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
}
 else {
   $user_id = '';
}
;

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style2.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <div class="home-section" id="home">
      <!-- shape -->

      <div class="container">
         <div class="row align-items-center">
            <div class="home-content">
               <h3>Welcome to,</h3>
               <h1>PhotoFolio</h1>
               <p>" Creating a world of colors and imagination, one stroke at a time. Art that knows no boundaries or
                  limitations and A creator of beauty, a master of art "</p>
            </div>
         </div>
      </div>
   </div>

   <section class="category">

      <h1 class="heading">Category</h1>

      <div class="swiper category-slider">

         <div class="swiper-wrapper">

            <a href="category.php?category=Portrait" class="swiper-slide slide">
               <img src="images/icon_1.png" alt="">
               <h3>Portrait</h3>
            </a>

            <a href="category.php?category=Landscape" class="swiper-slide slide">
               <img src="images/icon_2.png" alt="">
               <h3>Landscape</h3>
            </a>

            <a href="category.php?category=OilPaint" class="swiper-slide slide">
               <img src="images/icon_3.png" alt="">
               <h3>OilPaint</h3>
            </a>

            <a href="category.php?category=Black_White" class="swiper-slide slide">
               <img src="images/icon_4.png" alt="">
               <h3>Black_White</h3>
            </a>

            <a href="category.php?category=fridge" class="swiper-slide slide">
               <img src="images/icon_5.png" alt="">
               <h3>Animal</h3>
            </a>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <section class="home-products">

      <h1 class="heading">Latest Paintings</h1>

      <div class="swiper products-slider">

         <div class="swiper-wrapper">

            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            if ($select_products->rowCount() > 0) {
               while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <form action="" method="post" class="swiper-slide slide">
                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                     <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                     <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                     <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                     <div class="name">
                        <?= $fetch_product['name']; ?>
                     </div>
                     <div class="flex">
                        <div class="price"><span>Rs : </span>
                           <?= $fetch_product['price']; ?><span>/-</span>
                        </div>
                        <input type="number" name="qty" class="qty" min="1" max="99"
                           onkeypress="if(this.value.length == 2) return false;" value="1">
                     </div>
                     <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                  </form>
                  <?php
               }
            } else {
               echo '<p class="empty">No products added yet!</p>';
            }
            ?>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>

      var swiper = new Swiper(".home-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });

      var swiper = new Swiper(".category-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 2,
            },
            650: {
               slidesPerView: 3,
            },
            768: {
               slidesPerView: 4,
            },
            1024: {
               slidesPerView: 5,
            },
         },
      });

      var swiper = new Swiper(".products-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            550: {
               slidesPerView: 2,
            },
            768: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });

   </script>

</body>

</html>