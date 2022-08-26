<?php
require_once './app/controller/HomeController.php';
require_once './app/controller/AdminController.php';
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $home = new HomeController;
        $home->trang_chu();
        break;
        // case admin
    case 'admin':
        $admin = new AdminController;
        $admin->admin();
        break;
        // case loại hàng
    case 'loai_hang':
        $loai_hang = new AdminController;
        $loai_hang->loai_hang();
        break;
    case 'danh_sach_loai':
        $loai_hang = new AdminController;
        $loai_hang->ds_loai_hang();
        break;
    case 'insert_loai':
        require_once './app/controller/Insert_Data/InsertLoaiController.php';
        break;
    case 'delete_loai':
        require_once './app/controller/Delete_Data/delete_all_loai.php';
        break;
    case 'delete_one_loai':
        require_once './app/controller/Delete_Data/delete_loai.php';
        break;
    case 'sua_loai':
        AdminController::change_loai();
        break;
    case 'update_loai':
        AdminController::update_loai();
        break;
    case 'search_sp':
        HomeController::search_sp();
        break;
        // case hàng hóa (sản phẩm)
    case 'hang_hoa':
        $loai_hang = new AdminController;
        $loai_hang->hang_hoa();
        break;
    case 'danh_sach_san_pham':
        $ds_san_pham = new AdminController;
        $ds_san_pham->ds_san_pham();
        break;
    case 'insert_san_pham':
        require_once './app/controller/Insert_Data/InsertSpController.php';
        break;
    case 'delete_sp':
        require_once './app/controller/Delete_Data/delete_all_sp.php';
        break;
    case 'delete_one_sp':
        require_once './app/controller/Delete_Data/delete_one_sp.php';
        break;
    case 'sua_san_pham':
        AdminController::change_sp();
        break;
    case 'update_san_pham':
        require_once './app/controller/Update_Data/Update_Sp_Controller.php';
        break;
        // case user (tài khoản đăng nhập)
    case 'khach_hang':
        require_once './app/controller/Fetch_Data/fetch_users.php';
        break;
    case 'user':
        $user = new AdminController;
        $user->user();
        break;
    case 'danh_sach_user':
        $ds_user = new AdminController;
        $ds_user->ds_user();
        break;
    case 'sign_in_user':
        require_once './app/controller/User_Account/sign_in.php';
        break;
    case 'logn_in_form':
        require_once './app/controller/User_Account/logn_in.php';
        break;
    case 'logn_out':
        require_once './app/controller/User_Account/logn_out.php';
        break;
    case 'user_info':
        require_once './app/views/admin/user/info_user.php';
        break;
    case 'forgot_pass':
        require_once './app/views/admin/user/fillter_email.php';
        break;
    case 'check_email':
        require_once './app/controller/Fetch_Data/fetch_email.php';
        break;
    case 'change_pass_forgot':
        require_once './app/views/admin/user/change_pass_forgot.php';
        break;
    case 're_password':
        require_once './app/views/admin/user/change_pass_user.php';
        break;
    case 'update_pass_user':
        require_once './app/controller/Update_Data/update_pass_user.php';
        break;
    case 'update_pass_forgot':
        require_once './app/controller/Update_Data/Update_pass_forgot.php';
        break;
    case 'change_info_user':
        require_once './app/views/admin/user/change_info_user.php';
        break;
    case 'update_info_user':
        require_once './app/controller/Update_Data/Update_Info_User.php';
        break;
    case 'kich_hoat':
        require_once './app/controller/Update_Data/kich_hoat.php';
        break;
        // case cart
    case 'cart_lists':
        HomeController::cart();
        break;
    case 'unset':
        unset($_SESSION['list_cart']);
        header('location: index.php');
        break;
    case 'cart':
        require_once './app/views/Home/home_carts/user_cart.php';
        break;
    case 'delete_cart_lists':
        require_once './app/controller/Delete_Data/delete_cart_list.php';
        break;
        // case bình luận thông tin hàng hóa (sản phẩm)
    case 'binh_luan':
        $binh_luan = new AdminController;
        $binh_luan->binh_luan();
        break;
    case 'chi_tiet_binh_luan':
        $ct_binh_luan = new AdminController;
        $ct_binh_luan->ct_binh_luan();
        break;
    case 'delete_comment':
        require_once './app/controller/Delete_Data/delete_comment.php';
        break;
    case 'post_comment':
        require_once './app/controller/Insert_Data/InsertComment.php';
        break;
        // case thống kê thông tin hàng hóa, sản phẩm và bình luận 
    case 'thong_ke':
        $thong_ke = new AdminController;
        $thong_ke->thong_ke_loai();
        break;
    case 'bieu_do':
        $bieu_do = new AdminController;
        $bieu_do->bieu_do();
        break;
        // xu ly phan homepage (giao dien nguoi dung)
    case 'details':
        HomeController::product_detail();
        break;
    default:
        echo "duong dan khong ton tai";
        break;
}
