<?php
@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

// Retrieve the user's form data from the database
$query = "SELECT * FROM forms WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$user_id]);

// Fetch the records
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>forms preview</title>

   <!-- font link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>

<section class="data_forms">
   <form action="forms_update.php" method="POST">

      <h3>Pregnant Info</h3>

      <div class="flex">
         <div class="inputBox">
            <span>Last Name:</span>
            <input type="text" name="last_name" value="<?= $data['last_name']; ?>" class="box">
         </div>
         <!-- Repeat similar code for other input fields -->
      </div>

      <input type="submit" name="save" class="btn" value="Save">
   </form>
</section>

<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>
