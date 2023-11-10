<?php

@include 'config.php';

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
   <title>home page</title>

   <!-- font link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>

<div class="home-bg">

   <section class="home">

      <div class="content">
      <div class="background-content">
            <h1>An <span>adventure</span> is<br>  about to begin.</h1>
            <p>Giving birth and being born brings us into the essence <br>
             of creationwhere the human spirit is courageous  </br>
            and bold and the body, a miracle of wisdom.</p>
        </div>
    </div>

   </section>

</div>

<?php
include 'footer.php';
?>

<script src="js/script.js"></script>
</body>
</html>