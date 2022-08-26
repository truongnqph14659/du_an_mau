<?php
require_once './app/models/BaseModel.php';
require_once './vendor/reused_function.php';
if (isset($_POST['them_vao'])) {
    $ten_sp = $_POST['ten_sp'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = empty($_POST['giam_gia']) ? "0" : $_POST['giam_gia'];
    $images_sp = insert_img($_FILES['images_sp']);
    $dac_biet = $_POST['dac_biet'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $mo_ta_ct = $_POST['mo_ta_chi_tiet'];
    $ma_loai_sp = $_POST['ma_loai_sp'];
    $images_banner_db = "";
    if (isset($_FILES['images_sp_db'])) {
        $images_banner_db =  isset($_FILES['images_sp_db']) == true ? insert_img($_FILES['images_sp_db']) : "";
    }
    $form_value = "'$ten_sp','$don_gia','$giam_gia','$images_sp','$dac_biet','$ngay_nhap','$mo_ta_ct','$images_banner_db','$ma_loai_sp'";
    // ma_san_pham	ten_sp	don_gia	giam_gia	images_sp	dac_biet	so_luot_xem	ngay_nhap	mo_ta_chi_tiet	ma_loai_sp	
    $db_data = "ten_sp,don_gia,giam_gia,images_sp,dac_biet,ngay_nhap,mo_ta_chi_tiet,images_sp_db,ma_loai_sp";
    class InsertSpController extends BaseModel
    {
        var $table = "san_pham";
    }

    InsertSpController::Insert_Data($form_value, $db_data, 'danh_sach_san_pham');
}
