<?php
require_once './app/models/BaseModel.php';
class Update_Loai_Controller extends BaseModel
{
    var $table = "loai_san_pham";
}
$ten_loai = $_POST['ten_loai'];
$ma_loai = $_POST['ma_loai_sp'];
$re_values = "ten_loai='$ten_loai'";
Update_Loai_Controller::Update_Data($re_values, 'ma_loai_sp', $ma_loai, 'danh_sach_loai');
