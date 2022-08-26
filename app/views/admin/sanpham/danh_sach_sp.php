<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free-5.15.3-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/du_an_mau/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include './vendor/admin_header.php';
        ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php
                include './vendor/admin_nav_info_user.php';
                ?>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            Quản Lý Sản Phẩm
                        </div>
                    </div>
                    <?php if (isset($_GET['?msg'])) : ?>
                        <p class="alert alert-success"><?php echo $_GET['?msg']; ?></p>
                    <?php endif; ?>
                    <form action="delete_sp" method="post" enctype="multipart/form-data">
                        <div class="mx-auto col-12 py-2">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Mã Sản Phẩm</th>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">Đơn Gía</th>
                                        <th scope="col">Giam Gía</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Lượt Xem</th>
                                        <th scope="col">Đặc Biệt</th>
                                        <th scope="col">Ngày Nhập</th>
                                        <th scope="col">Img SP</th>
                                        <th scope="col">Ma Loại</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ds_san_pham as $values) : ?>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="ch_ma_sp[]" value="<?= $values['ma_san_pham'] ?>" id="flexCheckDefault">
                                                </div>
                                            </td>
                                            <td><?= $values['ma_san_pham'] ?></td>
                                            <td><?= $values['ten_sp'] ?></td>
                                            <td><?= $values['don_gia'] ?></td>
                                            <td><?= $values['giam_gia'] ?></td>
                                            <td>
                                                <img src="<?= $values['images_sp'] ?>" alt="" width="100px" srcset="">
                                            </td>
                                            <td><?= $values['so_luot_xem'] ?></td>
                                            <td>
                                                <?php $dac_biet =  $values['dac_biet'] === "1" ? "có" : "không" ?>
                                                <?= $dac_biet ?>
                                            </td>
                                            <td>
                                                <?= date('d-m-Y', strtotime($values['ngay_nhap'])) ?>
                                            </td>
                                            <td>
                                                <img width="100px" src="<?= $values['images_sp_db'] ?>"></img>
                                            </td>
                                            <td>
                                                <?= $values['ma_loai_sp'] ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-primary" href="sua_san_pham?ma_sp=<?= $values['ma_san_pham'] ?>" role="button">Sửa</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" href="delete_one_sp?ma_sp[]=<?= $values['ma_san_pham'] ?>" id="delete_one_row" role="button">Xóa</a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <button class="btn btn-primary" id="select_all" type="buttom">Chọn tất cả</button>
                            <button class="btn btn-primary" type="buttom" id="remove_select">Bỏ chọn tất cả</button>
                            <button class="btn btn-primary" type="submit" name="delete_all" id="delete_all">Xóa mục đã chọn</button>
                            <a class="btn btn-primary" href="hang_hoa" role="button">Thêm vào</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include './vendor/admin_footer.php';
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootrap.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- my js -->
    <script src="http://localhost:80/du_an_mau/js/my_JavaScript.js"></script>
</body>

</html>