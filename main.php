
<?php require_once "info.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css link -->
    <link rel="stylesheet" href="main.css">
    <!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>PHP Form_Validation</title>
  </head>
  <body>
<div class="container col-md-12">
   <span class="text-danger"> <?php echo $field?> </span>
    <div class="row">
          <div class="col-md-6">
    <img src="img/360_F_412191187_6GLLJSRawGOgpjJKfY6RY35DXWJofiLb.jpg">
</div>
<form action="<?php echo $action?>" method="POST" class="col-md-6"> 
    <h2 class="mt-5">Get Started</h2>
    <h5> Already Has An<span> <a href="login.php"> Account? </a> </span> </h5>
    <div class="container">
          <div class="row">
                  <div class="form-floating mb-5 col-md-6">
                   <button type="button" class="btn btn-light"> <i class='bx bxl-google'></i> <a href="https://accounts.google.com/login?hl=en"> Sign Up with Google </a></button>   
                       </div>
                  <div class="form-floating mb-5 col-md-6">
                <button type="button" class="btn btn-primary"> <i class='bx bxl-facebook-circle'></i> <a href="https://www.facebook.com/">Sign Up with Facebook </a></button>
                </div>
          </div>  
    </div>
<!--Top button -->
<div class="container">
    <div class="row">

    <!-- firstname field -->
<div class="form-floating mb-3 col-md-6">
  <input type="text" class="form-control" id="floatingInput" placeholder="Firstname" name="FIRSTNAME"
   value="<?php echo $firstname ?>">
  <label for="floatingInput"> <i class='bx bxs-group'></i>ENTER YOUR FIRST NAME</label>
 <span class="account"> <?php if(isset($fnameErr)) { ?>
    <?php echo  $fnameErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($fnamecheck)) { ?>
    <?php echo $fnamecheck; ?>
    <?php } ?>
 </span>
</div>

<!-- Lastname field -->
<div class="form-floating mb-3 col-md-6">
<input type="text" class="form-control" id="floatingInput"  placeholder="Lastname" name="LASTNAME"
value="<?php echo $lastname ?>">
  <label for="floatingPassword"> <i class='bx bxs-group'></i> ENTER YOUR LAST NAME</label>
 <span class="account"> <?php if(isset($lnameErr)) { ?>
    <?php echo  $lnameErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($lnamecheck)) { ?>
    <?php echo $lnamecheck; ?>
    <?php } ?>
 </span>
</div>

<!-- Email field -->
<div class="form-floating mb-3 col-md-6">
 <input type="email" class="form-control" id="floatingPassword" placeholder="name@example.com" name="Email" value="<?php echo $email1 ?>">
  <label for="floatingInput"> <i class='bx bxl-google'></i> ENTER YOUR EMAIL </label>
 <span class="account"> <?php if(isset( $Email)) { ?>
    <?php echo $Email; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($emailcheck)) { ?>
    <?php echo $emailcheck; ?>
    <?php } ?>
 </span>
</div>

<!-- password field -->
<div class="form-floating mb-3 col-md-6">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="COUNTRY" value="<?php echo $country ?>">
  <label for="floatingPassword"> <i class='bx bx-world'></i> COUNTRY</label>
 <span class="account"> <?php if(isset( $countryErr)) { ?>
    <?php echo  $countryErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($countrycheck)) { ?>
    <?php echo $countrycheck; ?>
    <?php } ?>
 </span>
</div>
<div class="form-floating mb-3 col-md-6">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="STATE"  value="<?php echo $state ?>">
  <label for="floatingPassword">  <i class='bx bx-map-pin'></i> STATE</label>
 <span class="account"> <?php if(isset($stateErr)) { ?>
    <?php echo $stateErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($statecheck)) { ?>
    <?php echo $statecheck; ?>
    <?php } ?>
 </span>
</div>

<div class="form-floating mb-3 col-md-6">
  <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="PASSWORD" value=" <?php $password ?>">
  <label for="floatingInput"> <i class='bx bxs-lock'></i> PASSWORD</label>
 <span class="account"> <?php if(isset($passwordErr)) { ?>
    <?php echo $passwordErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($passwordcheck)) { ?>
    <?php echo $passwordcheck; ?>
    <?php } ?>
 </span>
</div>
<div class="form-floating mb-3 col-md-6">
  <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="COMFIRM_PASSWORD">
  <label for="floatingInput"> <i class='bx bxs-lock'></i> COMFIRM PASSWORD</label>
 <span class="account"> <?php if(isset($cpasswordErr)) { ?>
    <?php echo $cpasswordErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($cpasswordcheck)) { ?>
    <?php echo $cpasswordcheck; ?>
    <?php } ?>
 </span>
</div>
<div class="form-floating mb-3 col-md-6">
<div class="form-check">
Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female   
</div>
<span class="account"> <?php if(isset($genderErr)) { ?>
    <?php echo $genderErr;?>
    <?php } ?>
 </span>
<span style="color:seagreen; font-weight: 500;"> <?php if(isset($gendercheck)) { ?>
    <?php echo $gendercheck; ?>
    <?php } ?>
 </span>
    </div>
     </div>
    <div class="d-grid gap-2">
  <button class="me1" type="submit" name="Register"> <i class='bx bxs-check-circle'></i>SignUp / REGISTER</button>
</div>
</div>
</form>
     </div>
</div>


  </body>
</html>