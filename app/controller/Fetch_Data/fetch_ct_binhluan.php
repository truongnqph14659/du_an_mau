<?php
require_once './app/models/BaseModel.php';
class fetch_ct_binhluan extends BaseModel
{
}
$id_sp = $_GET['id_sp'];
$all_ct_bl = fetch_ct_binhluan::ct_comments($id_sp);
