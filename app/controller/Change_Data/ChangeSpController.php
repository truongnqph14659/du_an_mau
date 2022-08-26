<?php
require_once './app/models/BaseModel.php';
$ma_sp = $_GET['ma_sp'];
class ChangeSpController extends BaseModel
{
    var $table = "san_pham";
}
$ma_san_pham = ChangeSpController::Get_One_Condition($ma_sp, '=', 'ma_san_pham');
