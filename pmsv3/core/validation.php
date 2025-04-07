<?php
function validate($filed_name,$value){
    if(empty($value)){
        return $filed_name ." Is Requred ";
    }
    else{
        return null;
    }
    
}


function validate_email($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return "in valid email ";

    }
    else{
        return null;
    }
}

function clean_phone($phone){
    $phone=filter_var($phone,FILTER_SANITIZE_NUMBER_INT);

    return $phone;
}

function password($password){

    $size=strlen($password);
    if($size<8){
        return "short password";
    }else{
        return null;
    }

}

function validate_user($name,$email,$gender,$phone,$password){
    $arr=
    [
        "name"=>$name,
        "email"=>$email,
        "gender"=>$gender,
        "phone"=>$phone,
        "password"=>$password


    ];
    foreach ($arr as $key => $value) {
        if($eror=validate($key,$value)){
            return $eror;
        }
    }


    if($eror= validate_email($email)){
        return $eror;

    }

    if($eror=password($password)){
        return $eror;

    }
}


