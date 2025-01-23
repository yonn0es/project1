<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/new-register.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<section class="register-section">

   <form action="" method="post">
      <h1>Register Now</h1>
      <div class="inputbox">
         <input type="text" name="name" required>
         <label for="">Name</label>
      </div>
      <div class="inputbox">
         <input type="email" name="email" required>
         <label for="">Email</label>
      </div>
      <div class="inputbox">
         <input type="password" name="password" required>
         <label for="">Password</label>
      </div>
      <div class="inputbox">
         <input type="password" name="cpassword" required>
         <label for="">Confirm Password</label>
      </div>
      <div class="inputbox">
         <select name="user_type" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
         </select>
         <label for="">User Type</label>
      </div>
      <button type="submit" name="submit">Register Now</button>
      <div class="register">
         <p>Already have an account? <a href="login.php">Login now</a></p>
      </div>
   </form>

   <div class="register-image-box">
      <img src="images/bookstore1.jpg" alt="Register Image">
   </div>

</section>

</body>
</html>