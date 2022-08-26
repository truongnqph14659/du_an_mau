<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang Giỏ Hàng VIOS 1.5E CVT (3 TÚI KHÍ)</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/du_an_mau/css/cart.css">

</head>

<body>
    <div class="container_page">
        <!-- header -->
        <?php
        require_once './vendor/home_header.php';
        ?>
        <!-- container -->
        <div class="container my-5">
            <h4 class="title_giohang">Giỏ hàng</h4>
            <form action="" method="post">
                <div class="table-responsive-xl">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col a">sản phẩm</th>
                                <th scope="col b">tên sản phẩm</th>
                                <th scope="col c">đơn giá</th>
                                <th scope="col c">số lượng</th>
                                <th scope="col c">tổng tiền</th>
                                <th scope="col">xóa</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php if (isset($_SESSION['list_cart'])) : ?>
                                <?php foreach ($_SESSION['list_cart'] as $orders => $values) : ?>
                                    <tr class="tr_data_cart">
                                        <th class="a">
                                            <img src="<?= $_SESSION['list_cart'][$orders]['images_sp'] ?>" class="rounded mx-auto d-block">
                                        </th>
                                        <td class="b"><?= $_SESSION['list_cart'][$orders]['ten_sp'] ?></td>
                                        <td class="c price_item"><?= number_format($_SESSION['list_cart'][$orders]['don_gia']) ?></td>
                                        <td class="c"><input type="number" min="1" name="quantity_order" value="<?= $_SESSION['list_cart'][$orders]['quantity'] ?>" class="form-control quantity_order m-auto"></td>
                                        <td class="c tong_tien_item">
                                            <?php
                                            $thanh_tien = number_format($_SESSION['list_cart'][$orders]['don_gia'] * $_SESSION['list_cart'][$orders]['quantity']);
                                            echo $thanh_tien . "đ";
                                            ?>
                                        </td>
                                        <td>
                                            <div class="d-grid gap-xl-1 d-md-block">
                                                <button class="btn btn-primary delete_items" data-id="<?php echo $_SESSION['list_cart'][$orders]['id_sp'] ?>">xóa</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-xl-flex justify-content-xl-between flex_payment">
                    <div class="continue_purchase">
                        <div class="card-body">
                            <a href="index.php">tiếp tục mua sắm</a>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-borderless table_payment">
                            <tbody>
                                <tr>
                                    <td class="price_text">tổng tiền:</td>
                                    <td class="price_number">
                                        <?php
                                        $tong_tien = 0;
                                        foreach ($_SESSION['list_cart'] as $orders => $values) {
                                            $tong_tien +=  $_SESSION['list_cart'][$orders]['don_gia'] * $_SESSION['list_cart'][$orders]['quantity'];
                                        }
                                        echo number_format($tong_tien) . "đ";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="payment_shipping">phí vận chuyển và thuế được tính lúc thanh toán
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="payment_button">
                                            <a href="trangthanhtoan.html">thanh toán</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <!-- footer -->
        <?php
        require_once './vendor/home_footer.php';
        ?>
    </div>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script>
        $(function() {
            $('.delete_items').each((index, item_remove) => {
                item_remove.addEventListener('click', (evt) => {
                    evt.preventDefault();
                    item_remove.parentElement.parentElement.parentElement.remove()
                    tong_tien()
                    const id_sp = $(item_remove).data('id');
                    $.ajax({
                        type: "POST",
                        url: "delete_cart_lists",
                        data: {
                            id_sp: id_sp
                        },
                        success: function(data) {

                            $(".header_left").html(data);
                        }
                    });
                })
            })
            $('.quantity_order').each((index, item_quantity) => {
                item_quantity.addEventListener('input', input_onchange)
            })
        })





        function input_onchange(event) {
            var Input = event.target;
            if (isNaN(Input.value) || Input.value <= 0) {
                Input.value = 1;
            }
        }

        function c() {
            var tr_data_cart = document.getElementsByClassName('tr_data_cart')
            var get_input_value = document.getElementsByClassName('quantity_order')
            for (var i = 0; i < tr_data_cart.length; i++) {
                get_input_value[i].addEventListener('input', (eval) => {
                    var parent = eval.target.parentElement.parentElement
                    var kq = parent.querySelector('.price_item').innerHTML.replace(/,/g, "") * eval.target.value
                    parent.querySelector('.tong_tien_item').innerHTML = kq.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ"
                    tong_tien()
                })
            }

        }

        function tong_tien() {
            var tong = 0;
            var hien_thi_tt = document.querySelector('.price_number')
            var tong_tien = document.querySelectorAll('.tong_tien_item');
            tong_tien.forEach((price_item) => {
                tong += Number(price_item.innerHTML.toString().replace(/,|đ/g, ""))
            })
            hien_thi_tt.innerHTML = tong.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ";
        }
        c()


        function removeCartItems(event) {
            var button_click = event.target;
            button_click.parentElement.parentElement.parentElement.remove()
            tong_tien()
        }

        // $('.submit').click(function(event) {
        //     event.preventDefault();
        //     var quantity = $('.quantity_order').val();
        //     var id_sp = $(this).data('id');
        //     var id_user = $(this).data('user');
        //     $.ajax({
        //         type: "POST",
        //         url: "cart_lists",
        //         data: {
        //             quantity: quantity,
        //             id_sp: id_sp,
        //             id_user: id_user
        //         },
        //         success: function(data) {
        //             $("html, body").animate({
        //                 scrollTop: 0
        //             }, "slow");
        //             // alert(data)
        //             $(".header_left").html(data);
        //         }
        //     });
        // });
    </script>
</body>

</html>