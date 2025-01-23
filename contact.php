<?php
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Message sent successfully!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Animate.css for animations -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Contact Us</h3>
   <p><a href="home.php">Home</a> / Contact</p>
</div>

<section class="contact animated fadeInUp">
   <div class="contact-container">
      <form action="" method="post" class="contact-form">
         <h3 class="form-title">Say Something!</h3>
         <div class="input-group">
            <input type="text" name="name" required placeholder="Enter your name" class="box">
            <i class="fas fa-user"></i>
         </div>
         <div class="input-group">
            <input type="email" name="email" required placeholder="Enter your email" class="box">
            <i class="fas fa-envelope"></i>
         </div>
         <div class="input-group">
            <input type="number" name="number" required placeholder="Enter your number" class="box">
            <i class="fas fa-phone"></i>
         </div>
         <div class="input-group">
            <textarea name="message" class="box" placeholder="Enter your message" cols="30" rows="10"></textarea>
            <i class="fas fa-comment"></i>
         </div>
         <input type="submit" value="Send Message" name="send" class="btn">
      </form>
   </div>
</section>

<?php include 'footer.php'; ?>

<!-- Custom JS -->
<script src="js/script.js"></script>

</body>
</html>
