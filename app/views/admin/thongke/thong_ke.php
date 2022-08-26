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
                            Thống Kê Loại Hàng
                        </div>
                    </div>
                    <div class="mx-auto col-12 py-2">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Loại Hàng</th>
                                    <th scope="col">Số Lượng</th>
                                    <th scope="col">Gía Cao Nhất</th>
                                    <th scope="col">Gía Thấp Nhất</th>
                                    <th scope="col">Trung Bình</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bánh Nướng</td>
                                    <td>100</td>
                                    <td>290.000</td>
                                    <td>20.000</td>
                                    <td>51.000</td>
                                </tr>
                                <tr>
                                    <td>Bánh Nướng</td>
                                    <td>100</td>
                                    <td>290.000</td>
                                    <td>20.000</td>
                                    <td>51.000</td>
                                </tr>
                                <tr>
                                    <td>Bánh Nướng</td>
                                    <td>100</td>
                                    <td>290.000</td>
                                    <td>20.000</td>
                                    <td>51.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary" href="bieu_do" role="button">Biểu Đồ</a>
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