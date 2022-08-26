<!DOCTYPE html>
<html lang="en">

<head>
    <title>laptop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="http://localhost/du_an_mau/css/HomePage.css">
</head>

<body>
    <div class="contain">
        <?php if (isset($_GET['msg']) == true) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_GET['msg'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <!-- header -->
        <?php
        include './vendor/home_header.php';
        ?>
        <!-- slider sp đặc biệt -->
        <?php
        isset($_GET['keyword']) == true ? '' : include './vendor/slider_sp_db.php';
        ?>
        <div class="content">
            <section class="content_body">
                <aside class="content_menu">
                    <!-- category (danh mục)  -->
                    <?php
                    include './vendor/home_category.php';
                    ?>
                    <!-- 10 sản phẩm nỗi bật-->
                    <?php
                    include './vendor/home_10_sp.php';
                    ?>
                </aside>
                <main>
                    <section class="main_title_options">
                        <h1>
                            <?php
                            echo isset($_GET['keyword']) == true ? $_GET['keyword'] : '';
                            ?>
                        </h1>
                        <?php
                        include './vendor/fillter_product.php';
                        ?>
                    </section>
                    <!-- products -->
                    <?php
                    include './vendor/home_products.php';
                    ?>
                </main>
            </section>
        </div>
        <!-- footer -->
        <?php
        include './vendor/home_footer.php';
        ?>
    </div>
    <!-- form login -->
    <?php
    include './vendor/form_login.php';
    ?>
    <!-- form register -->
    <?php
    include './vendor/form_register.php';
    ?>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,

            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".left_button",
                prevEl: ".right_button",
            },
        });
    </script>

    <script src="http://localhost:80/du_an_mau/js/JavaScript_Home.js"></script>
    <script src="http://localhost:80/du_an_mau/js/form-validation.js"></script>

</body>

</html>