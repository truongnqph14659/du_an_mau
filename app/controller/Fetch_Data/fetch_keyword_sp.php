<?php
require_once './app/models/BaseModel.php';
class fetch_keys_sp extends BaseModel
{
    var $table = "san_pham";
}
$keyword = $_GET['keyword'];
$data_sp = fetch_keys_sp::Get_One_Condition("%$keyword%", 'like', 'ten_sp');
