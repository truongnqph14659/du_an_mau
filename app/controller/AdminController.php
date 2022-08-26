<?php
class AdminController
{
    public function admin()
    {
        include './app/views/admin/admin.php';
    }
    // loai hàng
    public function loai_hang()
    {
        include './app/views/admin/loaihang/loai_hang.php';
    }
    public function ds_loai_hang()
    {
        require_once './app/controller/Fetch_Data/fetch_loai_sp.php';
        include './app/views/admin/loaihang/danh_sach_loai.php';
    }
    static function change_loai()
    {
        require_once './app/controller/Change_Data/ChangeLoaiController.php';
        include './app/views/admin/loaihang/form_change_loai.php';
    }
    static function update_loai()
    {
        require_once './app/controller/Update_Data/Update_Loai_Controller.php';
    }
    // sản phẩm hàng hóa
    public function hang_hoa()
    {
        include './app/views/admin/sanpham/san_pham.php';
    }
    public function ds_san_pham()
    {
        require_once './app/controller/Fetch_Data/fetch_san_pham.php';
        include './app/views/admin/sanpham/danh_sach_sp.php';
    }
    static function change_sp()
    {
        require_once './app/controller/Change_Data/ChangeSpController.php';
        include './app/views/admin/sanpham/form_change_sp.php';
    }

    // khach hang
    public function user()
    {
        include './app/views/admin/user/user.php';
    }
    public function ds_user()
    {
        require_once './app/controller/Fetch_Data/fetch_users.php';
        include './app/views/admin/user/ds_user.php';
    }
    // binh luan
    public function binh_luan()
    {
        require_once './app/controller/Fetch_Data/fetch_comments.php';
        include './app/views/admin/binhluan/binh_luan.php';
    }
    public function ct_binh_luan()
    {
        require_once './app/controller/Fetch_Data/fetch_ct_binhluan.php';
        include './app/views/admin/binhluan/chi_tiet_binh_luan.php';
    }
    // thong ke
    public function thong_ke_loai()
    {
        require './app/views/admin/thongke/thong_ke.php';
    }
    public function bieu_do()
    {
        require './app/views/admin/thongke/bieu_do.php';
    }
}
