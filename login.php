

<?php require_once "Linfo.php"; ?>



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
    <div class="row">
          <div class="col-md-6">
    <img src="img/360_F_412191187_6GLLJSRawGOgpjJKfY6RY35DXWJofiLb.jpg">
</div>
<form action="display.php" method="POST" class="col-md-6"> 
    <h2 class="mt-5"> Welcome, proceed to profile</h2>
    <h5> Open A New<span> <a href="main.php"> Account? </a> </span> </h5>
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
    <div class="form-floating mb-3 col-md-6">
 <input type="email" class="form-control" id="floatingPassword" placeholder="name@example.com" name="Email" value="<?php echo $email ?>">
  <label for="floatingInput"> <i class='bx bxl-google'></i> ENTER YOUR EMAIL </label>
 <span class="account"> <?php if(isset($emailErr)) { ?>
    <?php echo $emailErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($emailcheck)) { ?>
    <?php echo $emailcheck; ?>
    <?php } ?>
 </span>
</div>

<div class="form-floating mb-3 col-md-6">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="PASSWORD" vlaue=" <?php echo $password?>">
  <label for="floatingPassword"> <i class='bx bxs-lock'></i> PASSWORD</label>
 <span class="account"> <?php if(isset($passwordErr)) { ?>
    <?php echo $passwordErr; ?>
    <?php } ?>
 </span>
 <span style="color:seagreen; font-weight: 500;"> <?php if(isset($passwordcheck)) { ?>
    <?php echo $passwordcheck; ?>
    <?php } ?>
 </span>
</div>
    <div class="d-grid gap-2">
  <button class="me1" type="submit" name="register"> <i class='bx bxs-check-circle'></i>Login / Submit</button>
</div>
</div>
</form>





     </div>
</div>


  </body>
</html>