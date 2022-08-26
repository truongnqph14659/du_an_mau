<?php
require_once './app/models/BaseModel.php';
class fetch_loai_sp extends BaseModel
{
    var $table = "loai_san_pham";
}
$ds_loai_sp = fetch_loai_sp::Get_Data();
