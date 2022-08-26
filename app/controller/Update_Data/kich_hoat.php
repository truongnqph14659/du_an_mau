<?php
require_once './app/models/BaseModel.php';
class Update_Info_User extends BaseModel
{
    var $table = "user";
}
$user_id = $_GET['id_user'];
$kich_hoat = '1';
$re_values = "kich_hoat='$kich_hoat'";
Update_Info_User::Update_Data($re_values, 'user_id', $user_id, 'danh_sach_user');
