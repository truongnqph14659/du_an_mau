<?php
require_once './app/models/BaseModel.php';
class fetch_email extends BaseModel
{
    var $table = "user";
}
$email = $_POST['email'];
$check_email = fetch_email::Get_One_Condition("%$email%", 'like', 'email');
if (count($check_email) === 0) {
    header("location:forgot_pass?msg=Email doen't existing");
} else {
    extract($check_email[0]);
    $_SESSION['forgot_pass'] = [
        'user_id' => $user_id,
        'user_name' => $user_name,
        'image' => $image,
        'email' => $email
    ];
    header("location:change_pass_forgot");
}
