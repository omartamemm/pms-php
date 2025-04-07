<?php 
session_start();
include('../core/function.php');
include('../core/validation.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name =trim( $_POST['name']);
  
    $password =trim( $_POST['password']);

   


  
    $result=admin_login($name,$password);
    echo $result;
    var_dump($result);
    if($result=="yes"){
        $_SESSION['admin_name']=$name;
        header("location:../admin_dashpord.php");
        exit;

    }
    elseif($result=="no"){
        echo "not admin";

    }

} 
