<?php

include 'config.php';

if(isset($_POST['submit'])){
	//every variable corresponds specific column in the user table
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   //creating a connection to the database
   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   //executing the prepare statement
   $select->execute([$email]); 

   if($select->rowCount() > 0){//checking for errors in filling up informations
      $message[] = 'user email already exist!';//email exist in the DB
   }else
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';//password don't match
      }else{
         $insert = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert->execute([$name, $email, $pass]);//datas are inserted into DB
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
    include 'header.php';
    ?> 

<section class="form-container">
   <form action="" method="POST">
      <h3>register now</h3>
      <input type="text" name="name" class="box" placeholder="Enter your name" required>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <div class="password-toggle">
        <input type="password" name="pass" id="password" class="box" placeholder="Enter your password" required>
        <button type="button" id="togglePassword" class="toggle-button">
          <i class="fas fa-eye"></i>
        </button>
      </div>
      <div class="password-toggle">
        <input type="password" name="cpass" id="confirmPassword" class="box" placeholder="Confirm your password" required>
        <button type="button" id="toggleConfirmPassword" class="toggle-button">
          <i class="fas fa-eye"></i>
        </button>
</section>

<script>
  // Function to toggle password visibility
  function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const toggleButton = document.getElementById(`toggle${inputId}`);

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
      passwordInput.type = 'password';
      toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
    }
  }

  // Add event listeners for password and confirm password fields
  document.getElementById('togglePassword').addEventListener('click', function () {
    togglePasswordVisibility('password');
  });

  document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
    togglePasswordVisibility('confirmPassword');
  });
</script>

</body>
</html>
