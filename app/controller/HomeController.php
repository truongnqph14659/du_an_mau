<?php
require_once './app/models/BaseModel.php';
class HomeController extends BaseModel
{
    var $table = "san_pham";
    public function trang_chu()
    {
        $data_sp_db = HomeController::Get_One_Condition('1', '=', 'dac_biet');
        $data_sp = HomeController::Get_Data();
        $data_loai_sp = HomeController::Get_Loai_sp();
        $top_products = HomeController::top_products();
        include './app/views/Home/HomePage.php';
    }
    static function product_detail()
    {
        require_once './app/controller/Fetch_Data/fetch_one_sp.php';
        include './app/views/Home/home_details/details_page.php';
    }
    static function search_sp()
    {
        require_once './app/controller/Fetch_Data/fetch_keyword_sp.php';
        $data_loai_sp = HomeController::Get_Loai_sp();
        $top_products = HomeController::top_products();
        include './app/views/Home/HomePage.php';
    }
    static function cart()
    {
        require_once './app/controller/Fetch_Data/fetch_data_cart.php';
    }
}
