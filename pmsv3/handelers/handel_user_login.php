<?php 
session_start();
include('../core/function.php');
include('../core/validation.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name =trim( $_POST['name']);
  
    $password =trim( $_POST['password']);

    echo $name."<br>";
    echo $password."<br>";


   


    user_login($name,$password);
    $result=user_login($name,$password);
   
    var_dump($result);
    if($result=="yes"){
        $_SESSION['user_name']=$name;
        header("location:../index.php");
        exit;

    }
    elseif($result=="no"){
        set_message("danger", "Wrong name or password check yoour data");
        header("location:../user_login.php");
        exit;
       

    }

} 
