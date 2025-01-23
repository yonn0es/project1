<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/ff.png" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <ul>
            <li>📚 <strong>Large Selection of Books</strong>: From bestsellers to independent works and timeless classics.</li>
            <li>🛋️ <strong>Welcoming Environment</strong>: Comfortable reading spaces and a warm atmosphere.</li>
            <li>👥 <strong>Personalized Advice</strong>: Our passionate booksellers are here to guide you.</li>
            <li>🎉 <strong>Cultural Events</strong>: Book signings, reading clubs, and workshops.</li>
            <li>🚚 <strong>Fast and Reliable Delivery</strong>: Order online and receive your books quickly.</li>
            <li>💲 <strong>Competitive Prices</strong>: Enjoy attractive rates and regular promotions.</li>
            <li>🌱 <strong>Eco-Friendly Commitment</strong>: We use recycled materials and support eco-friendly publishers.</li>
         </ul>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>
   </div>


</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>J'ai trouvé tous les livres que je cherchais, et l'équipe m'a donné de superbes recommandations. Je reviendrai sans hésiter.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>L'ambiance est incroyable, et leur sélection de livres est impressionnante. J'ai passé des heures à explorer les rayons.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jane Smith</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Ma commande en ligne est arrivée rapidement et en parfait état. Je recommande vivement cette librairie !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alex Johnson</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>J'ai participé à un club de lecture organisé par la librairie, et c'était une expérience enrichissante. Bravo pour l'initiative !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Brown</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>J'ai pu acheter plusieurs livres à des prix très raisonnables. La qualité est toujours au rendez-vous.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Davis

</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Que vous soyez un lecteur occasionnel ou un passionné, cette librairie saura vous satisfaire. Un vrai coup de cœur !</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah Wilson</h3>
      </div>

   </div>
</section>

<section class="authors">

   <h1 class="title">Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/George_Orwell.avif" alt="">
         <h3>George Orwell</h3>
      </div>

      <div class="box">
         <img src="images/scott.jpeg" alt="">
         <h3>F.Scott Fitzgerald</h3>
      </div>

      <div class="box">
         <img src="images/Thomas+Erikson.png" alt="">
         <h3>Thomas Erikson</h3>
      </div>

      <div class="box">
         <img src="images/jamesclear.jpg" alt="">
         <h3>james Clear</h3>
      </div>

      <div class="box">
         <img src="images/robert.jpg" alt="">
         <h3>Robert Green</h3>
      </div>

      <div class="box">
         <img src="images/HASAN.jpeg" alt="">
         <h3>Mehdi Hasan</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
