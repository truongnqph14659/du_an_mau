<?php
require_once './app/models/BaseModel.php';
$ma_loai = $_GET['ma_loai_sp'];
class Delete_Loai extends BaseModel
{
    var $table = "loai_san_pham";
}
Delete_Loai::Delete($ma_loai, "ma_loai_sp", "danh_sach_loai");
