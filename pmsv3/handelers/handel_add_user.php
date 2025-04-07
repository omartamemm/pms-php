<?php
session_start();

include('../core/validation.php');
include('../core/function.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];

  $email = $_POST['email'];

  $phone = ($_POST['phone']);

  $phone = clean_phone($phone);

  $gender = $_POST['gender'];


  $password = $_POST['password'];





  $eror = validate_user($name, $email, $phone, $gender, $password);
  if (!empty($eror)) {
    set_message("danger", $eror);
    header("location:../admin_dashpord.php");
    exit;
  }
  else{

   add($name, $email, $phone, $gender, $password);
   set_message("success", "ADDED SUCCESSFULY");
    header("location:../admin_dashpord.php");
    exit;

  }


}
