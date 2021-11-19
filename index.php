<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhucSports</title>
    <!-- <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header2.css"> -->

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/slideshow.css">

    <!-- them dong ke tiep se lay duoc toan trang ko margin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <div class="app">
        <!-- Header -->
        <?php require './assets/sidebar/header.php'; ?>
        <?php
        if (isset($_GET['new'])) {
            $action = $_GET['new'];
            if ($action == 'unset') {
                unset($_SESSION['cart']);
            }
        }
        ?>

        <!-- Container -->
        <div class="app_container">
            <div class="grid wide">
                <div class="row app__content">

                    <div class="col l-12 m-12 c-12">
                        <!-- Home Filter -->
                        <?php require './assets/sidebar/home_filter.php'; ?>
                        <div class="responsive__home-filter">
                            <ul class="responsive__home-filter-list">
                                <!-- <li class="responsive__home-filter-item"><i class="fas fa-list"></i></li> -->
                                <li class="responsive__home-filter-item">Popular</li>
                                <li class="responsive__home-filter-item">New</li>
                                <li class="responsive__home-filter-item">Best Sale</li>
                                <li class="responsive__home-filter-item">Price</li>
                            </ul>
                        </div>
                        <!-- Product -->
                        <div class="home-product">
                            <div class="row">
                                <?php
                                include './assets/php/connect_db.php';
                                if (isset($_GET['action'])) {
                                    $action = $_GET['action'];

                                    if ($action == 'NK') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND MaLoaiHang='$action'";
                                    }
                                    if ($action == 'AD') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND MaLoaiHang='$action'";
                                    }
                                    if ($action == 'PM') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND MaLoaiHang='$action'";
                                    }
                                    if ($action == 'MZ') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND MaLoaiHang='$action'";
                                    }
                                    if ($action == 'low') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH order by Gia asc";
                                    }
                                    if ($action == 'high') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH order by Gia desc";
                                    }
                                    if ($action == 'best') {
                                        $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH AND a.SoLuongHang <= 10";
                                    }

                                    //$sql = "select * from hanghoa";
                                    $result = mysqli_query($con, $sql);
                                    $check = mysqli_fetch_array($result);
                                    if($check == 0){
                                        echo '<h3 class="alert__none-product">Không có sản phẩm nào</h3>';
                                    }
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <div class="col l-2-4 m-4 c-6">
                                            <a href="./product.php?MLH= <?= $row['MaLoaiHang'] ?>&id=<?= $row['TenHH'] ?>" class="home-product__link">
                                                <div class="home-product-item">
                                                    <div class="home-product-item__img" style="background-image: url(<?= $row['TenHinh'] ?>);">
                                                    </div>
                                                    <h4 class="home-product-item__name"><?= $row['TenHH'] ?></h4>
                                                    <div class="home-product-item__price">
                                                        <span class="home-product-item__price-old"><?= number_format($row['Gia_Cu'], 0, ',', '.') ?>đ</span>
                                                        <span class="home-product-item__price-current"><?= number_format($row['Gia'], 0, ',', '.') ?>đ</span>
                                                    </div>
                                                    <div class="home-product-item__action">
                                                        <span class="home-product-item__like--liked">
                                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star home-product-item__rating-icon-star-none fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home-product-item__favorite">
                                                        <i class="home-product-item__favorite-icon fas fa-check"></i> Like
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    // $sql = "select * from hanghoa order by Gia desc";
                                    $sql = "select * from hanghoa as a, hinhhanghoa as b where a.MSHH = b.MSHH";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <div class="col l-2-4 m-4 c-6">
                                            <a href="./product.php?MLH= <?= $row['MaLoaiHang'] ?>&id=<?= $row['TenHH'] ?>" class="home-product__link">
                                                <div class="home-product-item">
                                                    <div class="home-product-item__img" style="background-image: url(<?= $row['TenHinh'] ?>);">
                                                    </div>
                                                    <h4 class="home-product-item__name"><?= $row['TenHH'] ?></h4>
                                                    <div class="home-product-item__price">
                                                        <span class="home-product-item__price-old"><?= number_format($row['Gia_Cu'], 0, ',', '.') ?>đ</span>
                                                        <span class="home-product-item__price-current"><?= number_format($row['Gia'], 0, ',', '.') ?>đ</span>
                                                    </div>
                                                    <div class="home-product-item__action">
                                                        <span class="home-product-item__like--liked">
                                                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star fas fa-star"></i>
                                                            <i class="home-product-item__rating-icon-star home-product-item__rating-icon-star-none fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="home-product-item__favorite">
                                                        <i class="home-product-item__favorite-icon fas fa-check"></i> Like
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>

                        <!-- Pagination-->
                        <?php require './assets/sidebar/pagination.php'; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer  -->
        <?php require './assets/sidebar/footer.php'; ?>

    </div>

    <!-- Sau div toan trang la Modal -->
</body>

</html>