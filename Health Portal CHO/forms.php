<?php
@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
if(isset($_POST['submit'])){
    $last_name = $_POST["last_name"];
    $last_name = filter_var($last_name, FILTER_SANITIZE_STRING);
    $first_name = $_POST["first_name"];
    $first_name = filter_var($first_name, FILTER_SANITIZE_STRING);
    $middle_name = $_POST["middle_name"];
    $middle_name = filter_var($middle_name, FILTER_SANITIZE_STRING);
    $date_of_consultation = $_POST["date_of_consultation"];
    $date_of_consultation = filter_var($date_of_consultation, FILTER_SANITIZE_STRING);
    $family_serial_num = $_POST["family_serial_num"];
    $family_serial_num = filter_var($family_serial_num, FILTER_SANITIZE_STRING);
    $house_num = $_POST["house_num"];
    $house_num = filter_var($house_num, FILTER_SANITIZE_STRING);
    $barangay = $_POST["barangay"];
    $barangay = filter_var($barangay, FILTER_SANITIZE_STRING);
    $city = $_POST["city"];
    $city = filter_var($city, FILTER_SANITIZE_STRING);
    $province = $_POST["province"];
    $province = filter_var($province, FILTER_SANITIZE_STRING);
    $civil_status = $_POST["civil_status"];
    $civil_status = filter_var($civil_status, FILTER_SANITIZE_STRING);
    $birthday = $_POST["birthday"];
    $birthday = filter_var($birthday, FILTER_SANITIZE_STRING);
    $age = $_POST["age"];
    $age = filter_var($age, FILTER_SANITIZE_STRING);
    $height = $_POST["height"];
    $height = filter_var($height, FILTER_SANITIZE_STRING);
    $weight = $_POST["weight"];
    $weight = filter_var($weight, FILTER_SANITIZE_STRING); 
    $educational_attainment = $_POST["educational_attainment"];
    $educational_attainment = filter_var($educational_attainment, FILTER_SANITIZE_STRING); 
    $mobile_number = $_POST["mobile_number"];
    $mobile_number = filter_var($mobile_number , FILTER_SANITIZE_STRING); 
    $allergy = $_POST["allergy"];
    $allergy = filter_var($allergy , FILTER_SANITIZE_STRING); 
    $disability = $_POST["disability"];
    $disability = filter_var($disability , FILTER_SANITIZE_STRING); 
    $drug = $_POST["drug"];
    $drug = filter_var($drug , FILTER_SANITIZE_STRING); 
    $handicap = $_POST["handicap"];
    $handicap = filter_var($handicap , FILTER_SANITIZE_STRING); 
    $impairment = $_POST["impairment"];
    $impairment = filter_var($impairment , FILTER_SANITIZE_STRING);
    $last_men_period = $_POST["last_men_period"];
    $last_men_period = filter_var($last_men_period , FILTER_SANITIZE_STRING);         
    $tetanus_toxoid = $_POST["tetanus_toxoid"];
    $tetanus_toxoid = filter_var($tetanus_toxoid , FILTER_SANITIZE_STRING);   
    $gravidity = $_POST["gravidity"];
    $gravidity = filter_var($gravidity , FILTER_SANITIZE_STRING);          
    $estimated_due = $_POST["estimated_due"];
    $estimated_due = filter_var($estimated_due , FILTER_SANITIZE_STRING);   
    $parity = $_POST["parity"];
    $parity = filter_var($parity, FILTER_SANITIZE_STRING);   
    $term = $_POST["term"];
    $term = filter_var($term , FILTER_SANITIZE_STRING); 
    $pre_term = $_POST["pre_term"];
    $pre_term = filter_var($pre_term , FILTER_SANITIZE_STRING);    
    $live_birth = $_POST["live_birth"];
    $live_birth = filter_var($live_birth , FILTER_SANITIZE_STRING);   
    $abortion = $_POST["abortion"];
    $abortion = filter_var($abortion , FILTER_SANITIZE_STRING);
    $menarche = $_POST["menarche"];
    $menarche = filter_var($menarche , FILTER_SANITIZE_STRING);                     
    $period_duration = $_POST["period_duration"];
    $period_duration = filter_var($period_duration , FILTER_SANITIZE_STRING);   
    $birth_control_method = $_POST["birth_control_method"];
    $birth_control_method = filter_var($birth_control_method , FILTER_SANITIZE_STRING); 
    $menopause = $_POST["menopause"];
    $menopause = filter_var($menopause , FILTER_SANITIZE_STRING);  
    $what_age = $_POST["what_age"];
    $what_age = filter_var($what_age , FILTER_SANITIZE_STRING);     
    $syphilis_result = $_POST["syphilis_result"];
    $syphilis_result = filter_var($syphilis_result , FILTER_SANITIZE_STRING);   
    $penicillin_treatment = $_POST["penicillin_treatment"];
    $penicillin_treatment = filter_var($penicillin_treatment , FILTER_SANITIZE_STRING);  
    $test_class_hiv = $_POST["test_class_hiv"];
    $test_class_hiv = filter_var($test_class_hiv , FILTER_SANITIZE_STRING);  
    $prenatal_visits = $_POST["prenatal_visits"];
    $prenatal_visits = filter_var($prenatal_visits , FILTER_SANITIZE_STRING);  

    $insert_data = $conn->prepare("INSERT INTO `forms`(user_id, last_name, first_name, middle_name, date_of_consultation, family_serial_num, house_num, barangay, city, province, civil_status, birthday, age, height, weight, educational_attainment, mobile_number, allergy, disability, drug, handicap, impairment, last_men_period, tetanus_toxoid, gravidity, estimated_due, parity, term, pre_term, live_birth, abortion, menarche, period_duration, birth_control_method, menopause, what_age, syphilis_result, penicillin_treatment, test_class_hiv, prenatal_visits) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $insert_data->execute([$user_id, $last_name, $first_name, $middle_name, $date_of_consultation, $family_serial_num, $house_num, $barangay, $city, $province, $civil_status, $birthday, $age, $height, $weight, $educational_attainment, $mobile_number, $allergy, $disability, $drug, $handicap, $impairment, $last_men_period, $tetanus_toxoid, $gravidity, $estimated_due, $parity, $term, $pre_term, $live_birth, $abortion, $menarche, $period_duration, $birth_control_method, $menopause, $what_age, $syphilis_result, $penicillin_treatment, $test_class_hiv, $prenatal_visits]);
    header('location:forms_preview.php');
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>forms</title>

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

      <h3>Pregnant Info</h3>

      <div class="flex">
         <div class="inputBox">
            <span>Last Name:</span>
            <input type="text" name="last_name" placeholder="enter your last name" class="box" required>
         </div>
         <div class="inputBox">
            <span>First Name:</span>
            <input type="text" name="first_name" placeholder="enter your first name" class="box" required>
         </div>
         <div class="inputBox">
            <span>Middle Name:</span>
            <input type="text" name="middle_name" placeholder="enter your middle name" class="box">
         </div>
         <div class="inputBox">
            <span>Date of Consultation:</span>
            <input type="date" name="date_of_consultation" class="box" required>
         </div>
         <div class="inputBox">
            <span>Family Serial Number:</span>
            <input type="text" name="family_serial_num" class="box" >
         </div>
         <div class="inputBox">
            <span>House No.:</span>
            <input type="text" name="house_num" placeholder="e.g. block lot street" class="box">
         </div>
         <div class="inputBox">
            <span>Barangay:</span>
                        <select name="barangay" class="box" required>
                        <option value="Assumption">Assumption</option>
                        <option value="Bagong Buhay">Bagong Buhay</option>
                        <option value="Bagong Buhay II">Bagong Buhay II</option>
                        <option value="Bagong Buhay III">Bagong Buhay III</option>
                        <option value="Ciudad Real">Ciudad Real</option>
                        <option value="Citrus">Citrus</option>
                        <option value="Dulong Bayan">Dulong Bayan</option>
                        <option value="Fatima">Fatima</option>
                        <option value="Fatima II">Fatima II</option>
                        <option value="Fatima III">Fatima III</option>
                        <option value="Fatima IV">Fatima IV</option>
                        <option value="Fatima V">Fatima V</option>
                        <option value="Francisco Homes-Guijo">Francisco Homes-Guijo</option>
                        <option value="Francisco Homes-Mulawin">Francisco Homes-Mulawin</option>
                        <option value="Francisco Homes-Narra">Francisco Homes-Narra</option>
                        <option value="Francisco Homes-Yakal">Francisco Homes-Yakal</option>
                        <option value="Gaya-gaya">Gaya-gaya</option>
                        <option value="Graceville">Graceville</option>
                        <option value="Gumaoc Central">Gumaoc Central</option>
                        <option value="Gumaoc East">Gumaoc East</option>
                        <option value="Gumaoc West">Gumaoc West</option>
                        <option value="Kaybanban">Kaybanban</option>
                        <option value="Kaypian">Kaypian</option>
                        <option value="Lawang Pari">Lawang Pari</option>
                        <option value="Maharlika">Maharlika</option>
                        <option value="Minuyan">Minuyan</option>
                        <option value="Minuyan II">Minuyan II</option>
                        <option value="Minuyan III">Minuyan III</option>
                        <option value="Minuyan IV">Minuyan IV</option>
                        <option value="Minuyan V">Minuyan V</option>
                        <option value="Minuyan Proper">Minuyan Proper</option>
                        <option value="Muzon">Muzon</option>
                        <option value="Paradise III">Paradise III</option>
                        <option value="Poblacion">Poblacion</option>
                        <option value="Poblacion I">Poblacion I</option>
                        <option value="San Isidro">San Isidro</option>
                        <option value="San Manuel">San Manuel</option>
                        <option value="San Martin">San Martin</option>
                        <option value="San Martin II">San Martin II</option>
                        <option value="San Martin III">San Martin III</option>
                        <option value="San Martin IV">San Martin IV</option>
                        <option value="San Pedro">San Pedro</option>
                        <option value="San Rafael">San Rafael</option>
                        <option value="San Rafael I">San Rafael I</option>
                        <option value="San Rafael III">San Rafael III</option>
                        <option value="San Rafael IV">San Rafael IV</option>
                        <option value="San Rafael V">San Rafael V</option>
                        <option value="San Roque">San Rouque</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santa Cruz II">Santa Cruz II</option>
                        <option value="Santa Cruz III">Santa Cruz III</option>
                        <option value="Santa Cruz IV">Santa Cruz IV</option>
                        <option value="Santa Cruz V">Santa Cruz V</option>
                        <option value="Santo Cristo">Santo Cristo</option>
                        <option value="Santo Niño">Santo Niño</option>
                        <option value="Santo Niño II">Santo Niño II</option>
                        <option value="Sapang Palay Proper">Sapang Palay Proper</option>
                        <option value="St. Martin de Porres">St. Martin de Porres</option>
                        <option value="Tungkong Mangga">Tungkong Mangga</option>
                        </select>
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
                        <select name="civil_status" class="box" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="separated">Separated</option>
                        </select>
         </div>
         <div class="inputBox">
         <span>Birthday:</span>
         <input type="date" name="birthday" class="box" required>
         </div>
         <div class="inputBox">
         <span>Age:</span>
         <input type="number" name="age" class="box" placeholder="Please enter your age" required>
         </div>
         <div class="inputBox">
         <span>Height (cm):</span>
         <input type="number" name="height" step="0.1" placeholder="Please enter your height" class="box">
         </div>
         <div class="inputBox">
         <span>Weight (kg):</span>
         <input type="number" name="weight" step="0.01" placeholder="Please enter your weight" class="box">
         </div>
         <div class="inputBox">
         <span>Educational Attainment:</span>
                        <select name="educational_attainment" class="box">
                            <option value="none">None</option>
                            <option value="elementary">Elementary</option>
                            <option value="high_school">High School</option>
                            <option value="college">College</option>
                            <option value="post_graduate">Post Graduate</option>
                        </select>
         </div>
         <div class="inputBox">
         <span>Mobile No:</span>
         <input type="text" name="mobile_number" value="+63" maxlength="13" class="box" required>
         </div>
      </div>

      <h4>PATIENT ALERT</h4>
      <div class="flex">
      <div class="inputBox">
    <span>Allergy:</span>
    <select name="allergy" class="box">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
</div>

<div class="inputBox">
    <span>Disability:</span>
    <select name="disability" class="box">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
</div>

<div class="inputBox">
    <span>Drug:</span>
    <select name="drug" class="box">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
</div>

<div class="inputBox">
    <span>Handicap:</span>
    <select name="handicap" class="box">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
</div>

<div class="inputBox">
    <span>Impairment:</span>
    <select name="impairment" class="box">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
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
         <input type="date" name="last_men_period" class="box" required>
         </div>
         <div class="inputBox">
         <span>Tetanus Toxoid:</span>
         <select name="tetanus_toxoid" class="box" required>
         <option value="yes">Yes</option>
         <option value="no">No</option>
         </select>
         </div>
         <div class="inputBox">
         <span>Gravidity:</span>
         <input type="text" name="gravidity" class="box" placeholder="number of times that get pregnant" required>
         </div>
         <div class="inputBox">
         <span>Estimated Date of Confinement:</span>
         <input type="date" name="estimated_due" class="box" required>
         </div>
         <div class="inputBox">
         <span>Parity:</span>
         <input type="text" name="parity" class="box" placeholder="number of times that has given birth" required>
         </div>
         <div class="inputBox">
         <span>Term:</span>
         <input type="text" name="term" class="box" placeholder="pregnancy term" required>
         </div>
         <div class="inputBox">
         <span>Preterm:</span>
         <input type="text" name="pre_term" class="box" placeholder="number of times that has given early birth" required>
         </div>
         <div class="inputBox">
         <span>Livebirth:</span>
         <input type="text"name="live_birth" class="box" placeholder="number of livebirth" required>
         </div>
         <div class="inputBox">
         <span>Abortion:</span>
         <input type="text" name="abortion" class="box" placeholder="number of abortion" required>
         </div>
         </div>
      </div>

      <h6>PRENATAL</h6>
      <div class="flex">
         <div class="inputBox">
         <span>Menarche (Age of first menstruation):</span>
         <input type="text" name="menarche" class="box" required>
         </div>
         <div class="inputBox">
         <span>Period Duration (in days):</span>
         <input type="text" name="period_duration" class="box" required>
         </div>
         <div class="inputBox">
    <span>Birth Control Method:</span>
    <select name="birth_control_method" class="box" required>
      <option value="None">None</option>
        <option value="Oral contraceptives">Oral contraceptives</option>
        <option value="Injection or shot">Injection or shot</option>
        <option value="Implant">Implant</option>
        <option value="Patch">Patch</option>
        <option value="Intrauterine device">Intrauterine device</option>
    </select>
</div>
         <div class="inputBox">
         <span>Menopause:</span>
            <select name="menopause" class="box" required>
               <option value="Yes">Yes</option>
               <option value="No">No</option>
            </select>
         </div>
         <div class="inputBox">
         <span>If yes, at what age:</span>
         <input type="text"name="what_age" class="box" required>
         </div>
         <div class="inputBox">
         <span>Syphilis Result:</span>
            <select name="syphilis_result" class="box" required>
               <option value="Positive">Positive</option>
               <option value="Negative">Negative</option>
            </select>
         </div>
         <div class="inputBox">
         <span>Penicillin Treatment:</span>
         <select name="penicillin_treatment" class="box" required>
               <option value="Yes">Yes</option>
               <option value="No">No</option>
            </select>
         </div>
         <div class="inputBox">
         <span>Test class HIV:</span>
         <select name="test_class_hiv" class="box" required>
               <option value="Yes">Yes</option>
               <option value="No">No</option>
            </select>
         </div>
         <div class="inputBox">
         <span>Prenatal Visits:</span>
         <select name="prenatal_visits" class="box" required>
               <option value="Yes">Yes</option>
               <option value="No">No</option>
            </select>
         </div>
      </div>

      <input type="submit" name="submit" class="btn" value="Submit">

   </form>

</section>

<?php
include 'footer.php';
?>





<script src="js/script.js"></script>
</body>
</html>