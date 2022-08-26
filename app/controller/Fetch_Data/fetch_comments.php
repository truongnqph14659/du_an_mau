<?php
require_once './app/models/BaseModel.php';
class fetch_comments extends BaseModel
{
    var $table = "binh_luan";
}
$data_comments = fetch_comments::group_comments();
