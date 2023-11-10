<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <!-- Font link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/components.css">

</head>
<body>
<?php
include 'header.php';
?> 
<div class="CONTACT-US">
      <h2>Contact <span>Us</span></h2>
      <h3>We love to hear from you!</h3>
</div>
<div class="split-layout">
    <div class="split-left">
      <h2>Health Center Contact</h2>
      <select id="barangay-select">
        <option value="">Select a barangay</option>
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
      </select>
      <div id="barangay-contact-info"></div>
    </div>
    <div class="split-right">
      <img src="images/cho.png" alt="CHO Image" class="cho-image">
      <div class="contact-info">
        <p><a href="mailto:lgu.csjdm@gmail.com"><i class="fas fa-envelope"></i> lgu.csjdm@gmail.com</a></p>
        <p><a href="tel:044-815-8810"><i class="fas fa-phone"></i> 044-815-8810</a></p>
        <p><a href="https://csjdm.gov.ph/city-health-office/"><i class="fas fa-globe"></i> csjdm.gov.ph</a></p>
      </div>
    </div>
</div>

<script>
    document.getElementById("barangay-select").addEventListener("change", function() {
  const barangay = this.value;
  const contactInfo = {
  "Assumption": {
    "address": "Barangay Assumption, Barangay Hall, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Bagong Buhay": {
    "address": "Natiyaga St., Bagong Buhay 1, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Bagong Buhay II": {
    "address": "Blk 73, Lot 8, Area B, Phase 11, Bagong Buhay II, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Bagong Buhay III": {
    "address": "Libis-Racho St., Bagong Buhay III, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Ciudad Real": {
    "address": "Parkway Avenue, Ciudad Real, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Citrus": {
    "address": "Citrus Road, Citrus, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Dulong Bayan": {
    "address": "Karyapay Road, Dulong Bayan, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Fatima": {
    "address": "Blk 13, Lot 7, San Gabriel St., Fatima 1, San Jose del Monte, Bulacan, Philippines",
    "phone": "09274765939",
    "email": "N/A"
  },
  "Fatima II": {
    "address": "Fatima II St., Fatima II, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 999 9999",
    "email": "N/A"
  },
  "Fatima III": {
    "address": "Fatima III St., Fatima III, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 101 1010",
    "email": "N/A"
  },
  "Fatima IV": {
    "address": "Fatima IV St., Fatima IV, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 202 2020",
    "email": "N/A"
  },
  "Fatima V": {
    "address": "Fatima V St., Fatima V, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 303 3030",
    "email": "N/A"
  },
  "Francisco Homes-Guijo": {
    "address": "Guijo Street, Francisco Homes-Guijo, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 404 4040",
    "email": "N/A"
  },
  "Francisco Homes-Mulawin": {
    "address": "Phase E, Francisco Avenue, Francisco Homes-Mulawin, San Jose del Monte, Bulacan, Philippines",
    "phone": "044-3070160",
    "email": "N/A"
  },
  "Francisco Homes-Narra": {
    "address": "Phase F, Francisco Homes-Narra, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Francisco Homes-Yakal": {
    "address": "Francisco Homes 2, Francisco Homes-Yakal, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Gaya-gaya": {
    "address": "Brgy. Gaya-Gaya Barangay Hall, Sta Maria - Tungkong Mangga Road, San Jose Del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Graceville": {
    "address": "Graceville Avenue, Graceville, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 909 9090",
    "email": "N/A"
  },
  "Gumaoc Central": {
    "address": "Blk 6, Gumaoc Main Road, Gumaoc Central, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Gumaoc East": {
    "address": "Gumaoc Main Road, Gumaoc East, San Jose del Monte, Bulacan, Philippines",
    "phone": "09774292835",
    "email": "N/A"
  },
  "Gumaoc West": {
    "address": "Blk 12, Ruby Road, Gumaoc West, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Kaybanban": {
    "address": "Kaybanban St., Kaybanban, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 505 5050",
    "email": "N/A"
  },
  "Kaypian": {
    "address": "Phase 2, Barangay Kaypian, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Lawang Pari": {
    "address": "Dr Eduardo V. Roquero Sr. Avenue, Lawang Pari, San Jose del Monte, Bulacan, Philippines",
    "phone": "09069137371",
    "email": "N/A"
  },
  "Maharlika": {
    "address": "Lourdes Street, Phase 2 Subdivision, Maharlika, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Minuyan": {
    "address": "Road 7, Minuyan, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Minuyan II": {
    "address": "Quirino St., Minuyan II, San Jose del Monte, Bulacan, Philippines",
    "phone": "09155761756",
    "email": "N/A"
  },
  "Minuyan III": {
    "address": "Minuyan III St., Minuyan III, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 202 2020",
    "email": "minuyan3@gmail.com"
  },
  "Minuyan IV": {
    "address": "Minuyan IV St., Minuyan IV, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 303 3030",
    "email": "minuyan4@gmail.com"
  },
  "Minuyan V": {
    "address": "Road 16 Corner, Road 2, Minuyan V, San Jose del Monte, Bulacan, Philippines",
    "phone": "0909184471",
    "email": "N/A"
  },
  "Minuyan Proper": {
    "address": "Minuyan Proper St., Minuyan Proper, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 505 5050",
    "email": "minuyanproper@gmail.com"
  },
  "Muzon": {
    "address": "Blk 5, Section 5 Phase 1, Pabahay 2000, Muzon, San Jose del Monte, Bulacan, Philippines",
    "phone": "09206521522",
    "email": "N/A"
  },
  "Paradise 3": {
    "address": "Area-A1, Paradise 3, San Jose del Monte, Bulacan, Philippines",
    "phone": "09120546536",
    "email": "N/A"
  },
  "Poblacion": {
    "address": "Poblacion St., Poblacion, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 707 7070",
    "email": "poblacion@gmail.com"
  },
  "Poblacion I": {
    "address": "Poblacion I St., Poblacion I, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 808 8080",
    "email": "poblacion1@gmail.com"
  },
  "San Isidro": {
    "address": "San Isidro St., San Isidro, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 909 9090",
    "email": "sanisidro@gmail.com"
  },
  "San Manuel": {
    "address": "San Manuel St., San Manuel, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 101 1010",
    "email": "sanmanuel@gmail.com"
  },
  "San Martin": {
    "address": "San Martin de Porres Medical Center, San Martin, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "San Martin II": {
    "address": "San Martin II St., San Martin II, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 303 3030",
    "email": "sanmartin2@gmail.com"
  },
  "San Martin III": {
    "address": "San Martin III St., San Martin III, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 404 4040",
    "email": "sanmartin3@gmail.com"
  },
  "San Martin IV": {
    "address": "San Martin IV St., San Martin IV, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 505 5050",
    "email": "sanmartin4@gmail.com"
  },
  "San Pedro": {
    "address": "San Pedro St., San Pedro, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 606 6060",
    "email": "sanpedro@gmail.com"
  },
  "San Rafael": {
    "address": "San Rafael St., San Rafael, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 707 7070",
    "email": "sanrafael@gmail.com"
  },
  "San Rafael I": {
    "address": "Barangay Hall San Rafael 1 Upper, San Rafael I, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "San Rafael III": {
    "address": "San Rafael III Barangay Hall, San Rafael III, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "San Rafael IV": {
    "address": "San Rafael IV St., San Rafael IV, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 101 1010",
    "email": "sanrafael4@gmail.com"
  },
  "San Rafael V": {
    "address": "San Rafael V St., San Rafael V, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 202 2020",
    "email": "sanrafael5@gmail.com"
  },
  "San Roque": {
    "address": "San Roque Barangay Hall, San Roque, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 707 7070",
    "email": "poblacion@gmail.com"
  },
  "Santa Cruz": {
    "address": "Barangay Santa Cruz 1, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Santa Cruz II": {
    "address": "Santa Cruz II St., Santa Cruz II, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 404 4040",
    "email": "santacruz2@gmail.com"
  },
  "Santa Cruz III": {
    "address": "Santa Cruz III St., Santa Cruz III, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 505 5050",
    "email": "santacruz3@gmail.com"
  },
  "Santa Cruz IV": {
    "address": "Santa Cruz IV St., Santa Cruz IV, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 606 6060",
    "email": "santacruz4@gmail.com"
  },
  "Santa Cruz V": {
    "address": "Santa Cruz V St., Santa Cruz V, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 707 7070",
    "email": "santacruz5@gmail.com"
  },
  "Santo Cristo": {
    "address": "Santo Cristo Barangay Hall, Santo Cristo, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Santo Niño": {
    "address": "Santo Niño Main Barangay, Santo Niño, San Jose del Monte, Bulacan, Philippines",
    "phone": "09662574826",
    "email": "N/A"
  },
  "Santo Niño II": {
    "address": "Santo Niño II St., Santo Niño II, San Jose del Monte, Bulacan, Philippines",
    "phone": "+63 44 101 1010",
    "email": "santonino2@gmail.com"
  },
  "Sapang Palay Proper": {
    "address": "Sapang Palay Proper Barangay Hall, Sapang Palay Proper, San Jose del Monte, Bulacan, Philippines",
    "phone": "N/A",
    "email": "N/A"
  },
  "Tungkong Mangga": {
    "address": "Tangerine St., Corner Canary St., Pecsonville Subdivision, Tungkong Mangga, San Jose del Monte, Bulacan, Philippines",
    "phone": "044-8155558",
    "email": "N/A"
  }
};


  const barangayContactInfo = document.getElementById("barangay-contact-info");
  barangayContactInfo.innerHTML = `
  <div id="barangay-contact-info">
   <p><strong><i class="fas fa-map-marker-alt"></i> Address:</strong> ${contactInfo[barangay].address}</p>
   <p><strong><i class="fas fa-phone"></i> Phone:</strong> <a href="tel:${contactInfo[barangay].phone}">${contactInfo[barangay].phone}</a></p>
   <p><strong><i class="fas fa-envelope"></i> Email:</strong> <a href="mailto:${contactInfo[barangay].email}">${contactInfo[barangay].email}</a></p>
</div>


  `;
});
</script>
<?php
include 'footer.php';
?>
</body>
</html>
