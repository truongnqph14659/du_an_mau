<?php
require_once './app/models/BaseModel.php';
$arr_ma_sp = $_POST['ch_ma_sp'];
class delete_all_sp extends BaseModel
{
    var $table = "san_pham";
}
delete_all_sp::Delete($arr_ma_sp, "ma_san_pham", "danh_sach_san_pham");
