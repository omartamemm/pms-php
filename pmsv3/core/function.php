<?php
session_start();
function set_message($type, $text)
{
    $_SESSION['message'] = [
        "type" => $type,
        "text" => $text
    ];
}

function show_message()
{
    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message']['type'];
        $text = $_SESSION['message']['text'];

        return "<div class='alert alert-$type'>$text</div>";
    }
    unset($_SESSION['message']);
}




$file = __DIR__ . "/../data/emp.json";
function add($name, $email, $phone, $gender, $password)
{


    if (file_exists($GLOBALS['file'])) {

        $employees = json_decode(file_get_contents($GLOBALS['file']), true);

        if (!is_array($employees)) {
            $employees = [];
        }

        $id = empty($employees) ? 1 : max(array_column($employees, 'id')) + 1;





        $employee = [
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "gender" => $gender,
            "password" => $password

        ];


        $employees[] = $employee;




        file_put_contents($GLOBALS['file'], json_encode($employees, JSON_PRETTY_PRINT));


        return true;
    } else {
        return "file not found";
    }
}


$admins_file = __DIR__ . "/../data/admins.json";
function admin_login($name, $password)
{
    if (file_exists($GLOBALS['admins_file'])) {

        $admins = json_decode(file_get_contents($GLOBALS['admins_file']), true);


        foreach ($admins as  $admin) {

            if ($admin['name'] == $name && $admin['password'] == $password) {
                return "yes";
            }
        }
    }

    return "no";
}



function add_admin($name, $password)
{
    $admin = [
        "name" => $name,

        "password" => $password

    ];

    if (file_exists($GLOBALS['admins_file'])) {

        $admins = json_decode(file_get_contents($GLOBALS['admins_file']), true);

        if (!is_array($admins)) {
            $admins = [];
        }


        $admins[] = $admin;




        file_put_contents($GLOBALS['admins_file'], json_encode($admins, JSON_PRETTY_PRINT));


        return true;
    } else {
        return "file not found";
    }
}


function update_user($id, $name, $email, $phone, $gender, $password)
{
    if (file_exists($GLOBALS['file'])) {
        $users = json_decode(file_get_contents($GLOBALS['file']), true);

        if (!is_array($users)) {
            $users = [];
        }

        $userFound = false; // متغير لتتبع ما إذا تم العثور على المستخدم

        foreach ($users as &$user) {

            if ($user['id']== $id) {
                $user['name'] = $name;
                $user['email'] = $email;
                $user['phone'] = $phone;
                $user['gender'] = $gender;
                $user['password'] =$password;
                $userFound = true; // تم العثور على المستخدم
                break;
            }
        }

        if ($userFound) {
            file_put_contents($GLOBALS['file'], json_encode($users, JSON_PRETTY_PRINT));
            return true; // نجاح التحديث
        } else {
            return false; // المستخدم غير موجود
        }
    }
    return "file not found "; // الملف غير موجود
}



function user_login($name, $password)
{
    if (file_exists($GLOBALS['file'])) {

        $users = json_decode(file_get_contents($GLOBALS['file']), true);


        foreach ($users as  $user) {

            if ($user['name'] == $name && $user['password'] == $password) {
                return "yes";
            }
        }
    }

    return "no";
}

