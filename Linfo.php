
<?php
$password = $email = $passwordErr = $emailErr = "";
if (isset($_POST['register'])) {
    if (empty($_POST['Email'])) {
      $emailErr = "Your Email is required";
    } elseif (!is_string(trim($_POST['Email']))) {
      $emailErr = "Please enter a valid Email";
    } else {
      $email = $_POST['Email'];
      $emailcheck = "You Are Good To Go";
    }


    // PASSWORD VALIDATION

if (empty($_POST["PASSWORD"])) {
  $passwordErr = "Password Can`t Be Empty!";
  $passwordcheck = "";
}else {
  $password = $_POST["PASSWORD"];
  $passwordcheck = "You Are Good To Go";
}
}
?>