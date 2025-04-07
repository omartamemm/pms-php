<?php
session_start();
include('../core/function.php');
include('../core/validation.php');

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['admin_name']!=null) {
    
    $admin_name=$_POST['admin_name'];
    $admin_password=$_POST['admin_password'];

    echo $admin_name." ".$admin_password;

    add_admin($admin_name, $admin_password);
    header('location:../admin_dashpord.php');
    exit;



}

