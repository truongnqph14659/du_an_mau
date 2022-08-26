<?php
require_once './app/models/BaseModel.php';
if (isset($_POST['sign_up'])) {
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    $hash_pass = '';
    if (!empty($_POST['password'])) {
        $hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }
    $form_value = "'$user_name','$image','$email','$hash_pass'";
    $db_data = "user_name,image,email,password";
}
class sign_in_user extends BaseModel
{
    var $table = "user";
}
sign_in_user::Insert_Data($form_value, $db_data, "index.php");
