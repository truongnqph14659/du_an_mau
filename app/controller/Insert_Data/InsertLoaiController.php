<?php
require_once './app/models/BaseModel.php';
$ten_loai = $_POST['ten_loai'];
class InsertLoaiController extends BaseModel
{
    var $table = "loai_san_pham";
}
InsertLoaiController::Insert_Data("'$ten_loai'", "ten_loai", 'danh_sach_loai');
