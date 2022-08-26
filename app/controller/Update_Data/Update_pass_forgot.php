<?php
require_once './app/models/BaseModel.php';
extract($_POST);
if ($new_password === $confirm_password && !empty($confirm_password) && !empty($new_password)) {
    class Update_pass_forgot extends BaseModel
    {
        var $table = "user";
    }
    $user_id = $_SESSION['forgot_pass']['user_id'];
    $hash_pass = password_hash($new_password, PASSWORD_DEFAULT);
    $re_value = "password='$hash_pass'";
    unset($_SESSION['forgot_pass']);
    Update_pass_forgot::Update_Data($re_value, 'user_id', $user_id, 'index.php');
    die;
}
header("location:change_pass_forgot?msg=The password is differently");
