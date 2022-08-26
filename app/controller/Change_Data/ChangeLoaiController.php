<?php
require_once './app/models/BaseModel.php';
$ma_loai = $_GET['ma_loai_sp'];
class ChangeLoaiController extends BaseModel
{
    var $table = "loai_san_pham";
}
$ma_loai_sp = ChangeLoaiController::Get_One_Condition($ma_loai, '=', 'ma_loai_sp');
