<?php
require_once './app/models/BaseModel.php';
$ma_sp = $_GET['ma_sp'];
class delete_one_sp extends BaseModel
{
    var $table = "san_pham";
}
delete_one_sp::Delete($ma_sp, "ma_san_pham", "danh_sach_san_pham");
