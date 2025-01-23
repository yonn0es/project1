<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }

   }else{
      $message[] = 'Incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Ion Icons -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/new-login.css">
</head>
<body>
   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="popup-message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>

<section>
   <!-- Left Section: Form -->
   <form action="" method="post">
      <h1>Login</h1>
      <div class="inputbox">
         <ion-icon name="mail-outline"></ion-icon>
         <input type="email" name="email" required>
         <label for="">Email</label>
      </div>
      <div class="inputbox">
         <ion-icon name="lock-closed-outline"></ion-icon>
         <input type="password" name="password" required>
         <label for="">Password</label>
      </div>
      <div class="forget">
         <label><input type="checkbox"> Remember Me</label>
         <a href="#">Forget Password</a>
      </div>
      <button type="submit" name="submit">Log in</button>
      <div class="register">
         <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
   </form>

   <!-- Right Section: Image -->
   <div class="image-box">
      <img src="images/bookstore.jpg" alt="Side Illustration">
   </div>
</section>



   <!-- JavaScript for Smooth Dismiss -->
   <script>
      // Add smooth dismiss effect for pop-up messages
      document.addEventListener('click', function(event) {
         if (event.target.classList.contains('fa-times')) {
            const popup = event.target.parentElement;
            popup.style.animation = 'fadeOut 0.5s ease-out forwards';
            popup.addEventListener('animationend', () => popup.remove());
         }
      });
   </script>
</body>
</html>
