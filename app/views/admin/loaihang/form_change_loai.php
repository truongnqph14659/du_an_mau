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
                <!-- nav user information -->
                <?php
                include './vendor/admin_nav_info_user.php';
                ?>

                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            Quản Lý Loại Hàng
                        </div>
                    </div>
                    <form class="col-lg-12 mx-auto py-1" action="update_loai" method="POST" name="change_loaihang">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="ma_loai_sp" value="<?= $ma_loai_sp[0]['ma_loai_sp'] ?>" placeholder="nhập vào tên loại" hidden>
                        </div>
                        <div class="mb-3">
                            <label for="ten_loai" class="form-label">Tên Loại</label>
                            <input type="text" class="form-control" id="ten_loai" name="ten_loai" value="<?= $ma_loai_sp[0]['ten_loai'] ?>" placeholder="nhập vào tên loại">
                        </div>
                        <button class="btn btn-primary" type="submit">Sửa</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="http://localhost:80/du_an_mau/js/form-validation.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="js/bootrap.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>