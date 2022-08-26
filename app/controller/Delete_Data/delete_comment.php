<?php
require_once './app/models/BaseModel.php';
$ma_bl = $_GET['ma_bl'];
$id_sp = $_GET['id_sp'];
class delete_bl extends BaseModel
{
    var $table = "binh_luan";
}
delete_bl::Delete($ma_bl, "ma_binh_luan", "chi_tiet_binh_luan?id_sp=$id_sp");
