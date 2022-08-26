<?php
require_once './app/models/BaseModel.php';
require_once './vendor/reused_function.php';
class Update_Info_User extends BaseModel
{
    var $table = "user";
}
$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$old_image = $_POST['old_image'];
$user_image = $_FILES['image']['size'] === 0 ? $old_image : insert_img($_FILES['image']);
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$re_values = "user_name='$user_name',image='$user_image',email='$user_email',password='$user_password'";
unset($_SESSION['user_account']);
Update_Info_User::Update_Data($re_values, 'user_id', $user_id, 'index.php');
