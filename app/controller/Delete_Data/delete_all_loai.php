<?php
require_once './app/models/BaseModel.php';
$arr_data = $_POST['ch_ma_loai'];
echo "<pre>";
var_dump($arr_data);
die;
class delete_all_loai extends BaseModel
{
    var $table = "loai_san_pham";
}
delete_all_loai::Delete($arr_data, "ma_loai_sp", "danh_sach_loai");
