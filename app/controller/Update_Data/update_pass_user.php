<?php
require_once './app/models/BaseModel.php';
extract($_POST);
if (isset($_SESSION['user_account']) == true && $_SESSION['user_account']['user_email'] === $email) {
    if ($new_password === $confirm_password && !empty($confirm_password) && !empty($new_password)) {
        class update_pass extends BaseModel
        {
            var $table = "user";
        }
        $user_id = $_SESSION['user_account']['user_id'];
        $hash_pass = password_hash($new_password, PASSWORD_DEFAULT);
        $re_value = "password='$hash_pass'";
        unset($_SESSION['user_account']);
        update_pass::Update_Data($re_value, 'user_id', $user_id, 'index.php');
        die;
    }
    header("location:re_password?msg=The password is differently");
    die;
}
header("location:re_password?msg=email is incorrectly");
