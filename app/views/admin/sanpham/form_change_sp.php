<?php
require_once './app/controller/Fetch_Data/fetch_loai_sp.php';
?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <!-- nav user information -->
                <?php
                include './vendor/admin_nav_info_user.php';
                ?>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            Quản Lý Sản Phẩm
                        </div>
                    </div>
                    <form class="mx-auto py-1" action="update_san_pham" method="post" enctype="multipart/form-data">
                        <div class="d-flex">
                            <div class="col-lg-4">
                                <div>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="auto number" value="<?= $ma_san_pham[0]['ma_san_pham'] ?>" name="ma_san_pham" hidden>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $ma_san_pham[0]['ten_sp'] ?>" name="ten_sp" placeholder="nhập vào tên sản phẩm">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Đơn Gía</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" value="<?= $ma_san_pham[0]['don_gia'] ?>" name="don_gia" placeholder="nhập vào đơn giá">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Đặc biêt</label>
                                    <div class="input-group mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check_db" type="radio" name="dac_biet" id="inlineRadio1" <?= $ma_san_pham[0]['dac_biet'] === '1' ? "checked" : "" ?> value="1">
                                            <label class="form-check-label" for="inlineRadio1">đặc biệt</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check_no_db" type="radio" name="dac_biet" id="inlineRadio2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">không đặc biệt</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Giảm Gía</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" value="<?= $ma_san_pham[0]['giam_gia'] ?>" name="giam_gia" placeholder="nhập vào giảm giá">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Ảnh Sản Phẩm</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="images_sp_old" value="<?= $ma_san_pham[0]['images_sp'] ?>" id="inputGroupFile02" hidden>
                                        <input type="file" class="form-control" name="images_sp" id="inputGroupFile02">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="images_sp" class="form-label">Ảnh Sản banner san phẩm đặc biệt</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="images_sp_db" id="images_sp_db" disabled>
                                        <input type="text" class="form-control" name="images_sp_db_old" value="<?= $ma_san_pham[0]['images_sp_db'] ?>" id="images_sp_db" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Ngày Nhập</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput2" name="ngay_nhap" value="<?= $ma_san_pham[0]['ngay_nhap'] ?>" placeholder="nhập vào ngày nhập">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Loại Sản Phẩm</label>
                                    <select class="form-select" aria-label="Default select example" name="ma_loai_sp">

                                        <?php foreach ($ds_loai_sp as $values) : ?>
                                            <?php
                                            $select = $values == $ma_san_pham[0]['ma_loai_sp'] ? "selected" : "";
                                            ?>
                                            <option <?= $select ?> value="<?= $values['ma_loai_sp'] ?>"><?= $values['ten_loai'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mô Tả Chi Tiết</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mo_ta_chi_tiet"><?= $ma_san_pham[0]['mo_ta_chi_tiet'] ?></textarea>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit" name="them_vao">Sửa</button>
                        <a class="btn btn-primary" href="danh_sach_san_pham" role="button">Danh sách</a>
                        <button class="btn btn-primary" type="reset">Nhập lại</button>
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
</body>

</html>