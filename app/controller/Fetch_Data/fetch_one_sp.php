<?php
require_once './app/models/BaseModel.php';
class fetch_one_sp extends BaseModel
{
    var $table = "san_pham";
}
$id_sp = $_GET['id_sp'];
$data_sp = fetch_one_sp::Get_One_Condition($id_sp, '=', 'ma_san_pham');
$data_comments = fetch_one_sp::get_user_comment();
$related_sp = fetch_one_sp::Get_Data();
$count = fetch_one_sp::count_comment($id_sp);
if (count($data_sp) === 1) {
    extract($data_sp[0]);
    $view_sp = $so_luot_xem + 1;
    $revalue = "so_luot_xem='$view_sp'";
    fetch_one_sp::Update_luot_xem($revalue, 'ma_san_pham', $ma_san_pham);
    $_SESSION['sp'] = [
        'id_sp' => $ma_san_pham,
        'ten_sp' => $ten_sp,
        'don_gia' => $don_gia,
        'giam_gia' => $giam_gia,
        'images_sp' => $images_sp,
        'dac_biet' => $dac_biet,
        'so_luot_xem' => $so_luot_xem,
        'ngay_nhap' => $ngay_nhap,
        'mo_ta_chi_tiet' => $mo_ta_chi_tiet,
        'ma_loai' => $ma_loai_sp
    ];
}
