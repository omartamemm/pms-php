
<?php
session_start();

include('../core/validation.php');
include('../core/function.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['id'];
  
  echo $id."<br>";

  $name = $_POST['name'];

  $email = $_POST['email'];

  $phone = ($_POST['phone']);

  $phone = clean_phone($phone);

  $gender = $_POST['gender'];


  $password = $_POST['password'];

  echo $password."<br>";



  echo $name."<br>";


  $eror = validate_user($name, $email, $phone, $gender, $password);
  if (!empty($eror)) {
    set_message("danger", $eror);
    header("location:../edit.php");
    exit;
  }
  else{

    update_user($id,$name, $email, $phone, $gender, $password);
    set_message("success", "Successfully apdate ");
    header("location:../admin_dashpord.php");
    exit;



  }


}
