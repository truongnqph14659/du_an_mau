<?php
require_once './app/models/BaseModel.php';
class logn_in_form extends BaseModel
{
    var $table = "user";
}
$email = $_POST['email'];
$password = $_POST['password'];
$id_sp = isset($_POST['id_sp']) ? $_POST['id_sp'] : '';
$user = logn_in_form::Get_One_Condition("%$email%", 'like', 'email');
if (count($user) === 1) {
    if ($user && password_verify($password, $user[0]['password'])) {
        $_SESSION['user_account'] = [
            'user_id' => $user[0]['user_id'],
            'user_name' => $user[0]['user_name'],
            'user_image' => $user[0]['image'],
            'user_email' => $user[0]['email'],
            'user_password' => $user[0]['password'],
            'user_role' => $user[0]['role'],
            'user_status' => $user[0]['kich_hoat']
        ];
        if (!$id_sp) {
            $user[0]['role'] == 1 ? header("location:admin") : header("location:index.php");
            die;
        } else {
            header("location:details?id_sp=$id_sp");
            die;
        }
    }
    header("location:index.php?msg=Sorry, email or password incorrectly!");
} else {
    header("location:index.php?msg=Hold on, email or password doesn't exist!");
}
