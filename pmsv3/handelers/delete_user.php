<?php
session_start();
include('../core/validation.php');
include('../core/function.php');

if($_SERVER['REQUEST_METHOD']!="POST" || !isset($_POST['id']) || $_POST['id']=="" ){
    
    set_message("danger","faild to delete");
    
    header("location:../admin_dashpord.php");
    exit;


}

$id=$_POST['id'];
//echo $id."<br>";

var_dump(delete_user($id));

 set_message("success"," User Deleted Successfully ");
    
 header("location:../admin_dashpord.php");
 exit;

