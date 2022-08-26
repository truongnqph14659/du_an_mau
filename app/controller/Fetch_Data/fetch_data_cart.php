<?php
require_once './app/models/BaseModel.php';
extract($_POST);
class fetch_data_cart extends BaseModel
{
    var $table = "san_pham";
}
$data_sp = fetch_data_cart::Get_One_Condition($id_sp, '=', 'ma_san_pham');
extract($data_sp[0]);
$flag = false;
if (isset($_SESSION['list_cart'])) {
    foreach ($_SESSION['list_cart'] as $orders => $values) {
        if ($_SESSION["list_cart"][$orders]["id_sp"] == $id_sp) {
            $_SESSION["list_cart"][$orders] = [
                'id_sp' => $ma_san_pham,
                'ten_sp' => $ten_sp,
                'don_gia' => $don_gia,
                'giam_gia' => $giam_gia,
                'images_sp' => $images_sp,
                'dac_biet' => $dac_biet,
                'ngay_nhap' => $ngay_nhap,
                'ma_loai' => $ma_loai_sp,
                'id_user' => $id_user,
                'quantity' => $quantity
            ];
            $flag = true;
            break;
        }
    }
    // for ($i = 0; $i < count($_SESSION['list_cart']); $i++) {
    //     if ($_SESSION["list_cart"][$i]["id_sp"] == $id_sp) {
    //         $_SESSION["list_cart"][$i] = [
    //             'id_sp' => $ma_san_pham,
    //             'ten_sp' => $ten_sp,
    //             'don_gia' => $don_gia,
    //             'giam_gia' => $giam_gia,
    //             'images_sp' => $images_sp,
    //             'dac_biet' => $dac_biet,
    //             'ngay_nhap' => $ngay_nhap,
    //             'ma_loai' => $ma_loai_sp,
    //             'id_user' => $id_user,
    //             'quantity' => $quantity
    //         ];
    //         $flag = true;
    //         break;
    //     }
    // }
}

if (!$flag) {
    if (count($data_sp) === 1) {
        $_SESSION['list_cart'][] = [
            'id_sp' => $ma_san_pham,
            'ten_sp' => $ten_sp,
            'don_gia' => $don_gia,
            'giam_gia' => $giam_gia,
            'images_sp' => $images_sp,
            'dac_biet' => $dac_biet,
            'ngay_nhap' => $ngay_nhap,
            'ma_loai' => $ma_loai_sp,
            'id_user' => $id_user,
            'quantity' => $quantity
        ];
    }
}


echo '
    <i class="fas fa-shopping-cart cart_hover"></i>
    <div class="cart_number_items">' . count($_SESSION['list_cart']) . '</div>';

echo '<div class="cart_list_info">
    <h4 class="header_cart-heading">sản phẩm đã thêm</h4>
    <ul class="header_cart_list-items">';
foreach ($_SESSION['list_cart'] as $orders => $values) {
    echo '<li class="header_cart-item">';
    echo '<img  class="header_cart-img" src="' . $_SESSION["list_cart"][$orders]["images_sp"] . '">
    <div class="header_cart-info">
    <div class="header_cart_item_head">
    <h5 class="header_cart_item-name">'
        . $_SESSION['list_cart'][$orders]['ten_sp'] .
        '</h5>' .
        '<div class="header_cart_item-price-wrap">
     <span class="header_cart_item-price">'
        . number_format($_SESSION['list_cart'][$orders]['don_gia']) .
        '</div>
     </div>' .
        '<div class="header_cart_item-body">
     <span class="header_cart_item-description">
         phân loại: bạc
     </span>
     </div>
     </div>';
    echo '</li>';
}
echo '</ul>';
echo '<a href="cart" class="text-decoration-none btn-primary text-capitalize float-end rounded-0 m-1">Xem giỏ hàng</a>';
echo '</div>';
