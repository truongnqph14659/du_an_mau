<?php
require_once './app/models/BaseModel.php';
if (isset($_POST['submit_comment'])) {
    extract($_POST);
    $form_value = "'$noi_dung_bl','$thoi_gian_bl','$ma_san_pham','$user_id'";
    $db_data = "noi_dung_bl,thoi_gian_bl,ma_san_pham,user_id";
    class InsertComment extends BaseModel
    {
        var $table = "binh_luan";
    }

    InsertComment::Insert_Data($form_value, $db_data, "details?id_sp=$ma_san_pham&");
}
