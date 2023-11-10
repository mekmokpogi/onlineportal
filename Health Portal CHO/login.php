<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){
//login
   //variables for column email and pass from user table
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   //selecting data from email and user column in user table 
   $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email, $pass]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   //checking if your email and password match on the data on user table
   //checking if you login using an admin acc or user acc
   if($rowCount > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/components.css">
</head>
<body class="logfor-bg">
   
    
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


<section class="form-container">

   <form action="" method="POST">
   <div>
   <img id="loginlogo" src="images/logo.png" alt="CHOportal" >
   </div>
   <br>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <div class="password-toggle">
  <input type="password" name="pass" id="password" class="box" placeholder="Enter your password" required>
  <button type="button" id="togglePassword" class="toggle-button" onclick="togglePasswordVisibility()">
    <i class="fas fa-eye"></i>
  </button>
</div>
      <input type="submit" value="login now" class="btn" name="submit">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
      <p>Forgot your password? <a href="forgot_password.php">Reset it here</a></p>

   </form>
   

</section>
<script src="js/script.js"></script>
</body>
</html>
