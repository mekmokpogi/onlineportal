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
      <h3>Reset Password</h3>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <div class="password-toggle">
        <input type="password" name="old_password" class="box" placeholder="enter your old password" required>
        <button type="button" id="toggleOldPassword" class="toggle-button">
          <i class="fas fa-eye"></i>
        </button>
      </div>

      <div class="password-toggle">
        <input type="password" name="new_password" class="box" placeholder="Enter your new password" required>
        <button type="button" id="toggleNewPassword" class="toggle-button">
          <i class="fas fa-eye"></i>
        </button>
      </div>

      <div class="password-toggle">
        <input type="password" name="confirm_password" class="box" placeholder="Confirm your new password" required>
        <button type="button" id="toggleConfirmPassword" class="toggle-button">
          <i class="fas fa-eye"></i>
        </button>
      </div>
      <input type="submit" value="Reset Password" class="btn" name="submit">
      <p>Go back to <a href="login.php">Login</a></p>
   </form>

</section>
<script>
  // Function to toggle password visibility
  function togglePasswordVisibility(inputId) {
    const passwordInput = document.querySelector(`input[name="${inputId}"]`);
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
  document.getElementById('toggleOldPassword').addEventListener('click', function () {
    togglePasswordVisibility('old_password');
  });

  document.getElementById('toggleNewPassword').addEventListener('click', function () {
    togglePasswordVisibility('new_password');
  });

  document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
    togglePasswordVisibility('confirm_password');
  });
</script>
</body>
</html>
