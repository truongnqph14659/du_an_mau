<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mua Xe hơi Toyota chính hãng mới nhất</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="http://localhost/du_an_mau/css/trangchitiet.css">
</head>

<body>
    <div class="container_page">
        <div class="accordion-item">
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="alert alert-danger" role="alert">
                    Bình luận cần đăng nhập hoặc đăng ký tài khoản
                </div>
            </div>
        </div>
        <!-- header -->
        <?php
        require_once './vendor/home_header.php';
        ?>
        <div class="container">
            <div class="col-xl-7  title  d-inline-flex align-items-center">
                <div class="row col-xl-2  text-center">
                    <a href="index.php">trang chủ</a>
                </div>
                <div class="row col-xl-1 text-center">
                    <i class="fas fa-angle-right"></i>
                </div>
                <div class="row col-xl-3 text-center">
                    <span>chi tiết sản phẩm</span>
                </div>
            </div>
            <div class="product_detail">
                <div class="row col-xl-12 col-sm-12 m-sm-auto  justify-content-xl-center">
                    <div class="content_left col-xl-5">
                        <img src="<?= $data_sp[0]['images_sp'] ?>" alt="">
                    </div>
                    <nav class="content_right col-xl-4 flex-sm-column">
                        <ul>
                            <li class="product_image"><img src="<?= $data_sp[0]['images_sp'] ?>" alt="" srcset=""></li>
                            <li>
                                <p class="product_name"><?= $data_sp[0]['ten_sp'] ?></p>
                            </li>
                            <li><span class="product_price"><?= number_format($data_sp[0]['don_gia']) ?>VNĐ</span></li>
                            <li><span class="bonus">Bảo 02 năm hành trên toàn quốc</span></li>
                            <li>
                                <form>
                                    <div class="d-flex">
                                        <div>
                                            <input type="number" class="form-control quantity_order" name="quantity_order" min="1" id="inputGroupFile01">
                                            <input type="text" class="form-control id_sp" id="inputGroupFile01" value="<?= $id_sp ?>" name="id_sp" hidden>
                                            <input type="text" class="form-control user_id" id="inputGroupFile01" value="<?= $_SESSION['user_account']['user_id'] ?>" name="id_user" hidden>
                                        </div>
                                        <div>
                                            <input class="btn btn-primary submit" id="success" role="button" name="submit" type="submit" data-user="<?php echo $_SESSION['user_account']['user_id'] ?>" data-id="<?php echo $id_sp ?>" value="Đặt mua ngay">
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li>
                                <span class="media_connection">chia sẻ với chúng tôi qua</span>
                                <div class="social_media">
                                    <i class="fab fa-facebook-square"></i>
                                    <i class="fab fa-youtube-square"></i>
                                    <i class="fab fa-twitter-square"></i>
                                    <i class="fab fa-tiktok"></i>
                                    <i class="fab fa-instagram-square"></i>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="comment">
                <span class="fw-bolder text-success">mô tả</span>
                <?php if (!isset($_SESSION['user_account'])) : ?>
                    <span role="button" class="btn btn-primary binh_luan" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        bình luận
                    </span>
                <?php endif; ?>
                <div class=" product_description ">
                    <p>
                        <?= $data_sp[0]['mo_ta_chi_tiet'] ?>
                    </p>
                </div>
            </div>
            <!-- phần dành cho bình luận -->
            <div class=" mt-2">
                <?php
                if (isset($_SESSION['user_account'])) {
                    require_once './vendor/form_comment.php';
                }
                ?>
                <!------ Include the above in your HEAD tag ---------->
                <?php if ($data_comments) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="page-header">
                                    <h3><small class="pull-right"><?= empty($count['tong_bl']) == true ? "0" : $count['tong_bl'] ?> comments</small></h3>
                                </div>
                                <div class="comments-list">
                                    <?php foreach ($data_comments as $values) : ?>
                                        <?php if ($values['ma_san_pham'] == $id_sp) : ?>
                                            <div class="media">
                                                <?php
                                                if (isset($values['thoi_gian_bl'])) {
                                                    $data_time = $values['thoi_gian_bl'];
                                                    $days = (time() - strtotime($values['thoi_gian_bl'])) / (60 * 60 * 24);
                                                    $so_ngay = floor($days);
                                                }
                                                ?>
                                                <p class="pull-right">
                                                    <small>
                                                        <?php if (isset($so_ngay)) : ?>
                                                            <?= $so_ngay <= 0 ? '1 day ago' : "$so_ngay days ago" ?>
                                                        <?php endif; ?>
                                                    </small>
                                                </p>
                                                <img src="<?= $values['image'] ?>">
                                                <div class="media-body">
                                                    <p class="media-heading user_name fw-bold fs-6 mb-0"><?= $values['user_name'] ?></p>
                                                    <?= $values['noi_dung_bl'] ?>
                                                    <p><small><a href="">Like</a> - <a href="">Reply</a></small></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- phần dưới -->
            <div class=" col-xl-12 col-sm-12 ">
                <section class=" main_title_options ">
                    <h3>sản phẩm liên quan</h3>
                </section>
            </div>
            <!-- sản phẩm liên quan  -->
            <?php
            require_once './vendor/silder_3.php';
            ?>
        </div>
        <!-- footer -->
        <?php
        include './vendor/home_footer.php';
        ?>
        <?php
        require_once './vendor/form_login.php';
        ?>
        <?php
        require_once './vendor/form_register.php';
        ?>
    </div>
    <script src="http://localhost:80/du_an_mau/js/JavaScript_Home.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="http://localhost:80/du_an_mau/js/detail_sp.js"></script>

</body>

</html>