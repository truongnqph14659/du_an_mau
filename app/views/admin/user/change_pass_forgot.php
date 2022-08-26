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
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- nav user information -->
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            Thay Đổi Mật Khẩu
                        </div>
                    </div>
                    <?php if (isset($_GET['msg'])) : ?>
                        <div class="alert alert-danger d-flex align-items-center p-2 m-1" role="alert">
                            <div>
                                <?= $_GET['msg'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form class="col-lg-12 mx-auto py-1" action="update_pass_forgot" method="POST">
                        <div class="mb-1">
                            <label for="formGroupExampleInput2" class="form-label">Mật khẩu mới</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="new_password" placeholder="nhập vào mật khẩu mới">
                        </div>
                        <div class="mb-1">
                            <label for="formGroupExampleInput2" class="form-label">Nhập lại mật khẩu mới</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="confirm_password" placeholder="nhập lại mật khẩu mới">
                        </div>
                        <button class="btn btn-primary" type="submit">Thay Đổi</button>
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