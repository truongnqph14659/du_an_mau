<?php
require_once './app/models/BaseModel.php';
class fetch_san_pham extends BaseModel
{
    var $table = "san_pham";
}
$ds_san_pham = fetch_san_pham::Get_Data();
