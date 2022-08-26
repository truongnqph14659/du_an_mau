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
        include './vendor/admin_user.php';
        ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- nav information -->
                <?php
                include './vendor/admin_nav_info_user.php';
                ?>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            Thay Đổi Thông Tin
                        </div>
                    </div>
                    <form action="update_info_user" class="mx-auto py-1" method="post" enctype="multipart/form-data">
                        <div class="d-flex">
                            <div class="col-lg-6">
                                <div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="user_id" value="<?= $_SESSION['user_account']['user_id'] ?>" hidden>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tên User</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="user_name" value="<?= $_SESSION['user_account']['user_name'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Ảnh User</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                        <input type="text" class="form-control" name="old_image" id="inputGroupFile02" value="<?= $_SESSION['user_account']['user_image'] ?>" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput2" name="user_email" value="<?= $_SESSION['user_account']['user_email'] ?>">
                                </div>
                                <div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="user_password" value="<?= $_SESSION['user_account']['user_password'] ?>" hidden>
                                </div>
                                <div>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="kich_hoat" value="<?= $_SESSION['user_account']['user_status'] ?>" hidden>
                                </div>

                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Thay đổi</button>
                        <button class="btn btn-primary" type="reset">Nhập lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

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