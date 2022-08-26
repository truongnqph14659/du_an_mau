<?php
require_once './app/models/BaseModel.php';
require_once './vendor/reused_function.php';
class Update_Sp_Controller extends BaseModel
{
    var $table = "san_pham";
}
// ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp
$ma_sp = $_POST['ma_san_pham'];
$ten_sp = $_POST['ten_sp'];
$don_gia = $_POST['don_gia'];
$giam_gia = $_POST['giam_gia'];
$images_sp_old = $_POST['images_sp_old'];
$images_sp = $_FILES['images_sp']['size'] > 0 ? insert_img($_FILES['images_sp']) : $images_sp_old;
$images_sp_db_old = $_POST['images_sp_db_old'];
$images_sp_db = $images_sp_db_old;
if (isset($_FILES['images_sp_db'])) {
    $images_sp_db = $_FILES['images_sp_db']['size'] > 0 ? insert_img($_FILES['images_sp_db']) : $images_sp_db_old;
}
$dac_biet = $_POST['dac_biet'];
$ngay_nhap = $_POST['ngay_nhap'];
$mo_ta_ct = $_POST['mo_ta_chi_tiet'];
$ma_loai = $_POST['ma_loai_sp'];
// ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp
$re_values = "ten_sp='$ten_sp',don_gia='$don_gia',giam_gia='$giam_gia',images_sp='$images_sp',dac_biet='$dac_biet',ngay_nhap='$ngay_nhap',mo_ta_chi_tiet='$mo_ta_ct',images_sp_db='$images_sp_db',ma_loai_sp='$ma_loai'";
Update_Sp_Controller::Update_Data($re_values, 'ma_san_pham', $ma_sp, 'danh_sach_san_pham');
