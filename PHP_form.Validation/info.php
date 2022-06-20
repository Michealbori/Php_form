<?php
   $action = "";
   $firstname = ""; 
  $lastname = "";
   $email1 = "";
  $password = "";
  $cpassword = "COMFIRM_PASSWORD";
  $gender = "";
  $country = "";
  $state = "";
  $phone = "";
  $socialmedia = "";
   $fnameErr = $lnameErr =    $Email  = $passwordErr = $cpasswordErr = $genderErr = $stateErr =  $countryErr = $Scial_medialErr = $phoneErr = $textareaErr = "";
   $gendercheck ="";

// VALIDATION
    if (isset($_POST["Register"])) {
        // VALIDATE FIRST NAME
  if (empty($_POST["FIRSTNAME"])) {
    $fnameErr = "Firstname Can`t Be Empty!";
  } elseif (!is_string(trim($_POST["FIRSTNAME"]))) {
    $fnameErr = "Please enter a valid name";
  } else {
    $firstname = $_POST["FIRSTNAME"];
    $fnamecheck = "You Are Good To Go";
  } if (!preg_match ("/^[a-zA-z]*$/",$_POST["FIRSTNAME"])) {
    $fnameErr = "Only alphabets and whitespace are allowed.";
      $fnamecheck = "";
    } 
  
  
  
        // VALIDATE LAST NAME
  if (empty($_POST["LASTNAME"])) {
    $lnameErr = "Lastname Can`t Be Empty!";
  } elseif (!is_string(trim($_POST["LASTNAME"]))) {
    $lnameErr = "Please enter a valid name";
  } else {
    $lastname = $_POST["LASTNAME"];
    $lnamecheck = "You Are Good To Go";
  } if (!preg_match ("/^[a-zA-z]*$/",$_POST["LASTNAME"])) {
      $lnameErr = "Only alphabets and whitespace are allowed.";
        $lnamecheck = "";
    } 
  
  
  
  // VALIDATE EMAIL
  if (empty($_POST['Email'])) {
    $Email = "Your Email is required";
  } elseif (!is_string(trim($_POST['Email']))) {
    $Email = "Please enter a valid Email";
  } else {
    $email1 = $_POST['Email'];
    $emailcheck = "You Are Good To Go";
  }
  
  
  // "COUNTRY" VALIDATION
  if (empty($_POST["COUNTRY"])) {
    $countryErr = "Country Can`t Be Empty!";
    $countrycheck = "";
  } else {
    $countrycheck = "You Are Good To Go";
     $country = $_POST["COUNTRY"];
  }
  
  // "State" VALIDATION
  if (empty($_POST["STATE"])) {
     $stateErr = "State Can`t Be Empty!";
     $statecheck = "";
  } else {
    $statecheck = "You Are Good To Go";
    $state = $_POST["STATE"];
  }
  
  // PASSWORD VALIDATION
  if (empty($_POST["PASSWORD"])) {
    $passwordErr = "Password Can`t Be Empty!";
    $passwordcheck = "";
  } else {
    $passwordcheck = "You Are Good To Go";
    $password = $_POST["PASSWORD"];
  }
  
  // VALIDATE COMFIRM_PASSWORD
  if (empty($_POST[$cpassword])) {
      $cpasswordErr = "Comfirm_Password Can`t Be Empty!";
  }  else{
     $cpasswordcheck = "You Are Good To Go";
  } if ($_POST["PASSWORD"] !== $_POST[$cpassword]) {
     $cpasswordErr = "Comfirm_password need to contain the same Characters as password";
     $cpasswordcheck = "";
  }
  
      // phone validation;
      if(empty($_POST["social"])) {
        $Social_medialErr = "Social Medial Can`t Be Empty!";
      } else {
        $socialmedia = $_POST["social"];
        $Social_medialcheck = "You Are Good To Go";
      }

      // phone validation;
      if(empty($_POST["phone"])) {
        $phoneErr = "Phone Can`t Be Empty!";
      } else {
        $phone = $_POST["phone"];
        $phonecheck = "You Are Good To Go";
      }



  // VALIDATE GENDER
  if (empty ($_POST["gender"])) {  
    $genderErr = "Gender is required";  
  } else {  
    $gendercheck = "You Are Good To Go";
  }
   if(empty($_POST["FIRSTNAME"]) || empty($_POST["LASTNAME"]) || empty($_POST["social"]) || empty($_POST["Email"]) || empty($_POST["phone"]) || empty($_POST["COUNTRY"]) || empty($_POST["STATE"]) || empty($_POST["PASSWORD"])) {
      $action="main.php";
 } else {
    $action="display.php";
 }
  }

?>
<!-- PHP -->
