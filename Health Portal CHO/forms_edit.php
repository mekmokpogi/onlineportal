<?php
@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

$data = [];

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $user_id = $_SESSION['user_id'];

   // Retrieve the user's form data from the database
   $user_id = $_SESSION['user_id'];
   $query = "SELECT * FROM forms WHERE user_id = ? AND id = ?";
   $stmt = $conn->prepare($query);
   $stmt->execute([$user_id, $id]);

   // Fetch and display the records
   $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

   if (isset($_POST['submit'])) {
      $newLastName = $_POST['last_name'];
      $newFirstName = $_POST['first_name'];
  
      // Update the form data in the database
      $updateQuery = "UPDATE forms SET last_name = ?, first_name = ? WHERE user_id = ? AND id = ?";
      $updateStmt = $conn->prepare($updateQuery);
      $updateResult = $updateStmt->execute([$newLastName, $newFirstName, $user_id, $id]);
  
      if ($updateResult) {
          // Data updated successfully
          header('location: forms_preview.php'); // Redirect to the preview page or wherever you want.
      } else {
          // Handle the case where the update failed
          echo "Update failed. Please try again.";
      }
  }




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>forms edit</title>

   <!-- font link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>

<section class="data_forms">

   <form action="" method="POST">
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
      <h3>Pregnant Info</h3>

      <div class="flex">
         <div class="inputBox">
            <span>Last Name:</span>
            <input type="text" name="last_name" value="<?= $data['last_name']; ?>" class="box" required>
         </div>
         <div class="inputBox">
            <span>First Name:</span>
            <input type="text" name="first_name" value="<?= $data['first_name']; ?>" class="box" required>
         </div>
<!--         <div class="inputBox">
            <span>Middle Name:</span>
            <input type="text" name="middle_name" value="<?= $data['middle_name']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>Date of Consultation:</span>
            <input type="date" name="date_of_consultation" value="<?= $data['date_of_consultation']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>Family Serial Number:</span>
            <input type="text" name="family_serial_num" value="<?= $data['family_serial_num']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>House No.:</span>
            <input type="text" name="house_num" value="<?= $data['house_num']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>Barangay:</span>
                        <input type="text" name="barangay" class="box" value="<?= $data['barangay']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>City :</span>
            <input type="text" name="city" value="San Jose Del Monte" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>Province :</span>
            <input type="text" name="province" value="Bulacan" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Civil Status:</span>
                        <input type ="text" name="civil_status" value="<?= $data['civil_status']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Birthday:</span>
         <input type="date" name="birthday" value="<?= $data['birthday']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Age:</span>
         <input type="number" name="age" class="box" value="<?= $data['age']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Height (cm):</span>
         <input type="number" name="height" step="0.1" value="<?= $data['height']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Weight (kg):</span>
         <input type="number" name="weight" step="0.01" value="<?= $data['weight']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Educational Attainment:</span>
                        <input type="text" name="educational_attainment" value="<?= $data['educational_attainment']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Mobile No:</span>
         <input type="text" name="mobile_number" value="<?= $data['mobile_number']; ?>" class="box" readonly>
         </div>
      </div>

      <h4>PATIENT ALERT</h4>
      <div class="flex">
         <div class="inputBox">
         <span>Allergy:</span>
         <input type="text" name="allergy" value="<?= $data['allergy']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Disability:</span>
         <input type="text" name="disability" value="<?= $data['disability']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Drug:</span>
         <input type="text" name="drug" value="<?= $data['drug']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Handicap:</span>
         <input type="text" name="handicap" value="<?= $data['handicap']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Impairment:</span>
         <input type="text" name="impairment" value="<?= $data['impairment']; ?>" class="box" readonly>
         </div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         </div>
      </div>

      <h5>PRENATAL</h5>
      <div class="flex">
         <div class="inputBox">
         <span>Last Menstruation Period:</span>
         <input type="date" name="last_men_period" value="<?= $data['last_men_period']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Tetanus Toxoid:</span>
         <input type="text" name="tetanus_toxoid" value="<?= $data['tetanus_toxoid']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Gravidity:</span>
         <input type="text" name="gravidity" value="<?= $data['gravidity']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Estimated Date of Confinement:</span>
         <input type="date" name="estimated_due" value="<?= $data['estimated_due']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Parity:</span>
         <input type="text" name="parity" value="<?= $data['parity']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Term:</span>
         <input type="text" name="term" value="<?= $data['term']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Preterm:</span>
         <input type="text" name="pre_term" value="<?= $data['pre_term']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Livebirth:</span>
         <input type="text"name="live_birth" value="<?= $data['live_birth']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Abortion:</span>
         <input type="text" name="abortion" value="<?= $data['abortion']; ?>" class="box" readonly>
         </div>
         </div>
      </div>

      <h6>PRENATAL</h6>
      <div class="flex">
         <div class="inputBox">
         <span>Menarche (Age of first menstruation):</span>
         <input type="text" name="menarche" value="<?= $data['menarche']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Period Duration (in days):</span>
         <input type="text" name="period_duration" value="<?= $data['period_duration']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Birth Control Method:</span>
         <input type="text" name="birth_control_method" value="<?= $data['birth_control_method']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Menopause:</span>
         <input type="text" name="menopause" value="<?= $data['menopause']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>If yes, at what age:</span>
         <input type="number" name="what_age" value="<?= $data['what_age']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Syphilis Result:</span>
         <input type="text" name="syphilis_result" value="<?= $data['syphilis_result']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Penicillin Treatment:</span>
         <input type="text" name="penicillin_treatment" value="<?= $data['penicillin_treatment']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Test class HIV:</span>
         <input type="text" name="test_class_hiv" value="<?= $data['test_class_hiv']; ?>" class="box" readonly>
         </div>
         <div class="inputBox">
         <span>Prenatal Visits:</span>
         <input type="text" name="prenatal_visits" value="<?= $data['prenatal_visits']; ?>" class="box" readonly>
         </div>
      </div>-->

      <input type="submit" name="submit" class="btn" value="Save Changes">

   </form>

</section>

<?php
include 'footer.php';
?>





<script src="js/script.js"></script>
</body>
</html>