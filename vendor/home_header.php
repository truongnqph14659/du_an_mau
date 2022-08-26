<header>
    <div class="header_right">
        <a href="./index.html">
            <img src="http://localhost/du_an_mau/image/computer-desktop-pc-logo.jpg" alt="">
        </a>
        <div class="slogan_branch">
            <h2>Moon</h2>
            <span class="tien_phong">Computer</span>
        </div>
    </div>
    <div class="search_product_form">
        <form action="search_sp" method="GET">
            <input type="text" name="keyword" placeholder="tìm sản phẩm bạn mong muốn...">
            <button type="submit" class="submit_form">Tìm Kiếm</button>
        </form>
    </div>
    <div class="account_user">
        <div class="img_user">
            <img src="<?= isset($_SESSION['user_account']) == true ? $_SESSION['user_account']['user_image'] : './image/logo_user.png' ?>" width=" 50px" height="50px" alt="" srcset="">
        </div>
        <?php if (isset($_SESSION['user_account']) == false) : ?>
            <div class="action_user">
                <span class="logn_in">Đăng nhập</span>
                <span>/</span>
                <span class="sign_in">Đăng Ký</span>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['user_account']) == true) : ?>
            <div class="action_user">
                <p style="color:red; margin-bottom: 0rem;">Tài khoản</p>
                <span class="user_name dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['user_account']['user_name'] ?></span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="user_info">tài khoản của tôi</a></li>
                    <li><a class="dropdown-item" href="re_password">đổi mật khẩu</a></li>
                    <li><a class="dropdown-item" href="logn_out">đăng xuất</a></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="header_left">
        <i class="fas fa-shopping-cart cart_hover"></i>
        <div class="cart_number_items">
            <?php
            $quantity = 0;
            if (isset($_SESSION['list_cart'])) {
                if (count($_SESSION['list_cart']) > 0) {
                    $quantity =  count($_SESSION['list_cart']);
                }
            }
            echo $quantity;
            ?>
        </div>
        <div class="cart_list_info">
            <h4 class="header_cart-heading">sản phẩm đã thêm</h4>
            <ul class="header_cart_list-items">
                <?php if (isset($_SESSION['list_cart'])) : ?>
                    <?php foreach ($_SESSION['list_cart'] as $orders => $values) : ?>
                        <li class="header_cart-item">
                            <img src="<?= isset($_SESSION['list_cart']) == true ? $_SESSION['list_cart'][$orders]['images_sp'] : '' ?>" class="header_cart-img" alt="" srcset="">
                            <div class="header_cart-info">
                                <div class="header_cart_item_head">
                                    <h5 class="header_cart_item-name">
                                        <?= isset($_SESSION['list_cart']) == true ? $_SESSION['list_cart'][$orders]['ten_sp'] : '' ?>
                                    </h5>
                                    <div class="header_cart_item-price-wrap">
                                        <span class="header_cart_item-price">
                                            <?= isset($_SESSION['list_cart']) == true ? number_format($_SESSION['list_cart'][$orders]['don_gia']) : '' ?>
                                        </span>

                                    </div>
                                </div>
                                <div class="header_cart_item-body">
                                    <span class="header_cart_item-description">
                                        phân loại: bạc
                                    </span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <a href="cart" class="text-decoration-none btn-primary text-capitalize float-end rounded-0 m-1">Xem giỏ hàng</a>
        </div>
    </div>

</header>