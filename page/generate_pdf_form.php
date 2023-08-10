<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Barangay Clearance</title>
   <style>
      /* Add your CSS styling here */
      body {
         font-family: Arial, sans-serif;
      }
      .header {
         text-align: center;
         margin-bottom: 20px;
      }
      .logo {
         width: 100px;
         height: 100px;
      }
      .content {
         margin: 20px;
      }
      /* ... Add more styling as needed ... */
      .bold {
         font-weight: bold;
      }
   </style>
</head>
<body>
   <div class="header">
      
   <img src="<?= base_url('assets/backend/img/loon.png') ?>" alt="Logo" class="logo logo-left">
      <h2>Barangay Clearance</h2>

   </div>

   <div class="content">
      <p class="bold">Date Issued: <?= date('Y-m-d') ?></p>
      <p>Clearance Number: [Clearance Number]</p>

      <p>This is to certify that <span class="bold"><?= $brgyclearance_data->applicant_name ?></span>, <span class="bold"><?= $brgyclearance_data->age ?> years old</span>, <span class="bold"><?= $brgyclearance_data->occupation ?></span>, and a resident of <span class="bold"><?= $brgyclearance_data->address ?></span>, Barangay <span class="bold"><?= $brgyclearance_data->barangay_name ?></span>, <span class="bold"><?= $brgyclearance_data->city_municipality ?></span>, has applied for a Barangay Clearance.</p>

      <p>Based on our records, the applicant is of good moral character and has no criminal records within our jurisdiction.</p>

      <p>This Barangay Clearance is issued to <span class="bold"><?= $brgyclearance_data->applicant_name ?></span> for the purpose of <span class="bold"><?= $brgyclearance_data->purpose ?></span> and is valid until <span class="bold"><?= date('Y-m-d', strtotime($brgyclearance_data->expiry_date)) ?></span>.</p>

      <p>Given this <span class="bold"><?= date('Y-m-d') ?></span>, Barangay <span class="bold"><?= $brgyclearance_data->barangay_name ?></span>, <span class="bold"><?= $brgyclearance_data->city_municipality ?></span>, Philippines.</p>

      <p><span class="bold">_______________________</span></p>
      <p><span class="bold">Barangay Chairman</span></p>

      <hr>

      <p>*** For Barangay Use Only ***</p>
      <p>Control Number: [Control Number]</p>
      <p>Date Processed: [Date Processed]</p>
      <p>Processed By: [Name of Barangay Personnel]</p>
   </div>
</body>
</html>
