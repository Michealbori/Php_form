<?php require_once "info.php"; ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./display.css">
</head>
<body>

<h2 style="text-align:center">Your Profile Info &#128525 </h2>
<div class="card">
  <img src="img/document-information-4610441-3821564.webp" alt="Info" style="width:100%">
  <h3> Your First Name Is:   <?php echo  $firstname ?> </h3> 
  <hr>
  <h3> Your Last Name Is: <?php echo  $lastname ?>  </h3>
  <hr>
  <h3> Your Email Is:  <?php echo  $email1 ?> </h3>
  <hr>
  <h3> Your Country Is:  <?php echo  $country ?> </h3>
  <hr>
  <h3> Your State Is: <?php echo $state ?>  </h3>
  <hr>
  <br />
</div>
</body>
</html>
