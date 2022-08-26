<?php
require_once './app/models/BaseModel.php';
class fetch_accounts extends BaseModel
{
    var $table = "user";
}
$ds_accounts = fetch_accounts::Get_Data();
